<?php

namespace app\controllers;

use Yii;
use app\models\AppSpec;
use app\models\AppSpecSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
/**
 * AppSpecController implements the CRUD actions for AppSpec model.
 */
class AppSpecController extends Controller
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
     * Lists all AppSpec models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppSpecSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AppSpec model.
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
     * Creates a new AppSpec model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AppSpec();
        $mdl = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
        $listModel = ArrayHelper::map($mdl,'id','name');
        $type = \app\models\AppTipe::find()->orderBy(['name' => SORT_ASC])->all();
        $listTipe = ArrayHelper::map($type, 'id','name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'listModel' => $listModel,
            'listTipe' => $listTipe,
        ]);
    }

    /**
     * Updates an existing AppSpec model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->is_update = 0;
        $mdl = \app\models\AppModel::find()->orderBy(['name' => SORT_ASC])->all();
        $listModel = ArrayHelper::map($mdl,'id','name');
        $type = \app\models\AppTipe::find()->orderBy(['name' => SORT_ASC])->all();
        $listTipe = ArrayHelper::map($type, 'id','name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'listModel' => $listModel,
            'listTipe' => $listTipe,
        ]);
    }

    /**
     * Deletes an existing AppSpec model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id);
          $model->is_deleted = 0;
          $model->save();  // equivalent to $model->update();
        return $this->redirect(['index']);
    }

    /**
     * Finds the AppSpec model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AppSpec the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AppSpec::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
