<?php

namespace app\controllers;

use Yii;
use app\models\AppDatabasemobil;
use app\models\AppDatabasemobilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
/**
 * AppDatabasemobilController implements the CRUD actions for AppDatabasemobil model.
 */
class AppDatabasemobilController extends Controller
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
     * Lists all AppDatabasemobil models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppDatabasemobilSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $user = \app\models\AppUsers::find()->orderBy(['fullname'=>SORT_ASC])->all();
        $listUser = ArrayHelper::map($user, 'id','fullname');

        $merek = \app\models\AppMerek::find()->orderBy(['name' => SORT_ASC])->all();
        $listMerek = ArrayHelper::map($merek, 'id', 'name');

        $model1 = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
        $listModel1 = ArrayHelper::map($model1, 'id', 'name');

        $type = \app\models\AppTipe::find()->orderBy(['name' => SORT_ASC])->all();
        $listTipe = ArrayHelper::map($type, 'id','name');

        $warna = \app\models\AppWarna::find()->orderBy(['name'=>SORT_ASC])->all();
        $listWarna = ArrayHelper::map($warna, 'id','name');

        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'listUser' => $listUser,
            'listMerek' => $listMerek,
            'listModel1' => $listModel1,
            'listTipe' => $listTipe,
            'listWarna' => $listWarna,
        ]);
    }

    /**
     * Displays a single AppDatabasemobil model.
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
     * Creates a new AppDatabasemobil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AppDatabasemobil();
        
        $user = \app\models\AppUsers::find()->orderBy(['fullname'=>SORT_ASC])->all();
        $listUser = ArrayHelper::map($user, 'id','fullname');

        $showroom = \app\models\AppListShowroom::find()->orderBy(['showroom_name'=>SORT_ASC])->all();
        $listShowroom = ArrayHelper::map($showroom,'id','showroom_name');

        $city = \app\models\AppCity::find()->orderBy(['city_name' => SORT_ASC])->all();
        $listCity = ArrayHelper::map($city,'city_id','city_name');

        $merek = \app\models\AppMerek::find()->orderBy(['name' => SORT_ASC])->all();
        $listMerek = ArrayHelper::map($merek, 'id', 'name');

        $model1 = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
        $listModel1 = ArrayHelper::map($model1, 'id', 'name');

        $type = \app\models\AppTipe::find()->orderBy(['name' => SORT_ASC])->all();
        $listTipe = ArrayHelper::map($type, 'id','name');

        $warna = \app\models\AppWarna::find()->orderBy(['name'=>SORT_ASC])->all();
        $listWarna = ArrayHelper::map($warna, 'id','name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'listUser' => $listUser,
            'listShowroom' =>  $listShowroom,
            'listCity' => $listCity,
            'listMerek' => $listMerek,
            'listModel1' => $listModel1,
            'listTipe' => $listTipe,
            'listWarna' => $listWarna,
        ]);
    }

    /**
     * Updates an existing AppDatabasemobil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->last_update = date('Y-m-d');
         $user = \app\models\AppUsers::find()->orderBy(['fullname'=>SORT_ASC])->all();
        $listUser = ArrayHelper::map($user, 'id','fullname');

        $showroom = \app\models\AppListShowroom::find()->orderBy(['showroom_name'=>SORT_ASC])->all();
        $listShowroom = ArrayHelper::map($showroom,'id','showroom_name');

        $city = \app\models\AppCity::find()->orderBy(['city_name' => SORT_ASC])->all();
        $listCity = ArrayHelper::map($city,'city_id','city_name');

        $model1 = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
        $listModel1 = ArrayHelper::map($model1, 'id', 'name');

        $type = \app\models\AppTipe::find()->orderBy(['name' => SORT_ASC])->all();
        $listTipe = ArrayHelper::map($type, 'id','name');

        $warna = \app\models\AppWarna::find()->orderBy(['name'=>SORT_ASC])->all();
        $listWarna = ArrayHelper::map($warna, 'id','name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'listUser' => $listUser,
            'listShowroom' => $listShowroom,
            'listCity' => $listCity,
            'listModel1' => $listModel1,
            'listTipe' => $listTipe,
            'listWarna' => $listWarna,
        ]);
    }

    /**
     * Deletes an existing AppDatabasemobil model.
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
     * Finds the AppDatabasemobil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AppDatabasemobil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AppDatabasemobil::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
