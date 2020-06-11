<?php

namespace app\controllers;

use Yii;
use app\models\AppListShowroom;
use app\models\AppListShowroomSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
// use yii\web\UploadedFile;
use yii\filters\AccessControl;

use app\models\Storage;
use Aws\S3\Exception\S3Exception;

/**
 * AppListShowroomController implements the CRUD actions for AppListShowroom model.
 */
class AppListShowroomController extends Controller
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
     * Lists all AppListShowroom models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppListShowroomSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $province = \app\models\AppProvince::find()->orderBy(['province_name' => SORT_ASC])->all();
        $listProvinsi = ArrayHelper::map($province, 'province_id', 'province_name');

        $listCity1 = '';
        if (Yii::$app->request->get('AppListShowroomSearch')['provinci_id']) {
            //select model from app_city
            $city1 = \app\models\AppCity::find()->where('province_id = ' . Yii::$app->request->get('AppListShowroomSearch')['provinci_id'])->all();
            $listCity1 = ArrayHelper::map($city1, 'city_id', 'city_name');
        }

        $leasing = \app\models\AppListLeasing::find()->orderBy(['leasing_name' => SORT_ASC])->all();
        $listLeasing = ArrayHelper::map($leasing, 'id', 'leasing_name');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'listProvinsi' => $listProvinsi,
            'listCity1' => $listCity1,
            'listLeasing' => $listLeasing,
        ]);
    }

    /**
     * Displays a single AppListShowroom model.
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
     * Creates a new AppListShowroom model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

     public function actionCreate()
    {
        $model = new AppListShowroom();

        $province = \app\models\AppProvince::find()->orderBy(['province_name' => SORT_ASC])->all();
        $listProvinsi = ArrayHelper::map($province, 'province_id', 'province_name');

        $city1 = \app\models\AppCity::find()->orderBy(['city_name' => SORT_ASC])->all();
        $listCity1 = ArrayHelper::map($city1, 'city_id', 'city_name');

        $leasing = \app\models\AppListLeasing::find()->orderBy(['leasing_name' => SORT_ASC])->all();
        $listLeasing = ArrayHelper::map($leasing, 'id', 'leasing_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'listProvinsi' => $listProvinsi,
            'listCity1' => $listCity1,
            'listLeasing' => $listLeasing,
        ]);
    }


    /*-------------------------------Upload Image Function : Belum validasi upload image ------------------- */

    // public function actionCreate()
    // {
    //     $model = new AppListShowroom();

    //     $province = \app\models\AppProvince::find()->orderBy(['province_name' => SORT_ASC])->all();
    //     $listProvinsi = ArrayHelper::map($province, 'province_id', 'province_name');

    //     $city1 = \app\models\AppCity::find()->orderBy(['city_name' => SORT_ASC])->all();
    //     $listCity1 = ArrayHelper::map($city1, 'city_id', 'city_name');

    //     $leasing = \app\models\AppListLeasing::find()->orderBy(['leasing_name' => SORT_ASC])->all();
    //     $listLeasing = ArrayHelper::map($leasing, 'id', 'leasing_name');


    //     if ($model->load(Yii::$app->request->post())) {
    
    //          $image = $_FILES["AppListShowroom"];
    //         /*----------------------------------IMAGE UPLOAD FOR SHOWROOM----------------------------------*/
    //         $name_logo = $image["name"]["logo"];
    //         $tmp_name_logo = $image["tmp_name"]["logo"];

    //         $extension = explode('.', $name_logo);
    //         $extension = strtolower(end($extension));

    //         $key = md5(uniqid());
    //         $tmp_file_name_logo = "{$key}.{$extension}";
    //         $tmp_file_path_logo = realpath(__DIR__ . '/..') . "/images/{$tmp_file_name_logo}";
    //         move_uploaded_file($tmp_name_logo, $tmp_file_path_logo);

    //         try {
    //             $bucket = 'ramo-statics';
    //             $keyname = 'images/dealer/logo/'.str_replace(" ","-",strtolower($model->showroom_name)). '/' . $tmp_file_name_logo;
    //             $filepath = $tmp_file_name_logo;
    //             $s = new Storage();
    //             $result = $s->upload($bucket, $keyname, $tmp_file_path_logo);
    //         } catch (S3Exception $e) {
    //             echo $e->getMessage();
    //         } catch (\Exception $e) {
    //             echo $e->getMessage();
    //         }

    //         $model->logo = $tmp_file_name_logo;
    //         if (unlink($tmp_file_path_logo)) {
    //             $model->save();
    //         }

    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }
        
    //     return $this->render('create', [
    //         'model' => $model,
    //         'listProvinsi' => $listProvinsi,
    //         'listCity1' => $listCity1,
    //         'listLeasing' => $listLeasing,
    //     ]);
    // }

    /**
     * Updates an existing AppListShowroom model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $province = \app\models\AppProvince::find()->orderBy(['province_name' => SORT_ASC])->all();
        $listProvinsi = ArrayHelper::map($province, 'province_id', 'province_name');

        $city1 = \app\models\AppCity::find()->orderBy(['city_name' => SORT_ASC])->all();
        $listCity1 = ArrayHelper::map($city1, 'city_id', 'city_name');

        $leasing = \app\models\AppListLeasing::find()->orderBy(['leasing_name' => SORT_ASC])->all();
        $listLeasing = ArrayHelper::map($leasing, 'id', 'leasing_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'listProvinsi' => $listProvinsi,
            'listCity1' => $listCity1,
            'listLeasing' => $listLeasing,
        ]);
    }

    /**
     * Deletes an existing AppListShowroom model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->status = 2; 
        $model->save(); 
        return $this->redirect(['index']);
    }

    /**
     * Finds the AppListShowroom model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AppListShowroom the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AppListShowroom::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionCarikota()
    {
        $id = $_POST['id'];
        $model = Yii::$app->db->createCommand("SELECT city_id, city_name from app_city WHERE province_id = " . $id)->queryAll();
        return json_encode($model);
    }
}
