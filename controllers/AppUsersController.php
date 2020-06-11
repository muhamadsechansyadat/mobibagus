<?php

namespace app\controllers;

use app\models\Storage;
use Aws\S3\Exception\S3Exception;
use Yii;
use app\models\AppUsers;
use app\models\AppUsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * AppUsersController implements the CRUD actions for AppUsers model.
 */
class AppUsersController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
             'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AppUsers models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppUsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AppUsers model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AppUsers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AppUsers();

        if ($model->load(Yii::$app->request->post())) {
            $image = $_FILES["AppUsers"];
            $name_background = $image["name"]["background_profile"];
            $tmp_name_background = $image["tmp_name"]["background_profile"];

            $extension = explode('.', $name_background);
            $extension = strtolower(end($extension));

            $key = md5(uniqid());
            $tmp_file_name_background = "{$key}.{$extension}";
            $tmp_file_path_background = realpath(__DIR__ . '/..') . "/images/banner/{$tmp_file_name_background}";
            move_uploaded_file($tmp_name_background, $tmp_file_path_background);

            try {
                $bucket = 'ramo-statics';
                $keyname = 'images/banner/' . $tmp_file_name_background;
                $filepath = $tmp_file_name_background;
                $s = new Storage();
                $result = $s->upload($bucket, $keyname, $tmp_file_path_background);
            } catch (S3Exception $e) {
                echo $e->getMessage();
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
            $model->background_profile = $tmp_file_name_background;
            // $model->source_mobile = $tmp_file_name_mobile;
            if (unlink($tmp_file_path_background)) {
                $model->save();
            }
            // echo json_encode($tmp_file_path_background. "    zidni      " . $tmp_name_background);die;

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AppUsers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AppUsers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AppUsers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AppUsers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AppUsers::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
