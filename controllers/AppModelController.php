<?php

namespace app\controllers;

use Yii;
use app\models\AppModel;
use app\models\AppModelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
/**
 * AppModelController implements the CRUD actions for AppModel model.
 */
class AppModelController extends Controller
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
     * Lists all AppModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppModelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $merek = \app\models\AppMerek::find()->orderBy(['id' => SORT_ASC])->all();
        $listIdmerek = ArrayHelper::map($merek, 'id', 'name');


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'listIdmerek' => $listIdmerek,
        ]);
    }

    /**
     * Displays a single AppModel model.
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
     * Creates a new AppModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AppModel();

        $merek = \app\models\AppMerek::find()->orderBy(['id' => SORT_ASC])->all();
        $listIdmerek = ArrayHelper::map($merek, 'id', 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'listIdmerek' => $listIdmerek,
        ]);
    }

    /**
     * Updates an existing AppModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $merek = \app\models\AppMerek::find()->orderBy(['id' => SORT_ASC])->all();
        $listIdmerek = ArrayHelper::map($merek, 'id', 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'listIdmerek' => $listIdmerek,
        ]);
    }

    /**
     * Deletes an existing AppModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->status = 2;
        $model->save();  // equivalent to $model->update();
        return $this->redirect(['index']);
    }

    /**
     * Finds the AppModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AppModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AppModel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
