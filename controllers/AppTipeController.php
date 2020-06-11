<?php

namespace app\controllers;

use Yii;
use app\models\AppTipe;
use app\models\AppTipeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
/**
 * AppTipeController implements the CRUD actions for AppTipe model.
 */
class AppTipeController extends Controller
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
     * Lists all AppTipe models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppTipeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $merek = \app\models\AppMerek::find()->orderBy(['name' => SORT_ASC])->all();
        $listMerek = ArrayHelper::map($merek, 'id', 'name');

        $listModel1 = '';
        if (Yii::$app->request->get('AppTipeSearch')['id_merek']) {
            //select model from app_model
            $model1 = \app\models\AppModel::find()->where('id_merek = ' . Yii::$app->request->get('AppTipeSearch')['id_merek'])->all();
            $listModel1 = ArrayHelper::map($model1, 'id', 'name');
        }


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'listMerek' => $listMerek,
            'listModel1' => $listModel1,
        ]);
    }

    /**
     * Displays a single AppTipe model.
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
     * Creates a new AppTipe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AppTipe();

        $merek = \app\models\AppMerek::find()->orderBy(['name' => SORT_ASC])->all();
        $listMerek = ArrayHelper::map($merek, 'id', 'name');

        $model1 = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
        $listModel1 = ArrayHelper::map($model1, 'id', 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'listMerek' => $listMerek,
            'listModel1' => $listModel1,
        ]);
    }

    /**
     * Updates an existing AppTipe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $merek = \app\models\AppMerek::find()->orderBy(['name' => SORT_ASC])->all();
        $listMerek = ArrayHelper::map($merek, 'id', 'name');

        $model1 = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
        $listModel1 = ArrayHelper::map($model1, 'id', 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'listMerek' => $listMerek,
            'listModel1' => $listModel1,
        ]);
    }

    /**
     * Deletes an existing AppTipe model.
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
     * Finds the AppTipe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AppTipe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AppTipe::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionCarimodel()
    {
        $id = $_POST['id'];
        $model = Yii::$app->db->createCommand("SELECT id, name from app_model WHERE id_merek = " . $id . " ORDER BY name ASC")->queryAll();
        return json_encode($model);
    }
}
