<?php

namespace backend\controllers;

use backend\models\HodimSearch;
use Yii;
use backend\models\DarsJadval;
use backend\models\DarsJadvalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * DarsJadvalController implements the CRUD actions for DarsJadval model.
 */
class DarsJadvalController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DarsJadval models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DarsJadvalSearch();

        if(Yii::$app->getUser()->identity->role==0){

            $user_id=Yii::$app->getUser()->identity->user;

            $query = DarsJadval::find()->where(['user_id'=>$user_id])->orderBy(['id'=>SORT_DESC]);

            $dataProvider = new ActiveDataProvider([

                'query' => $query,

            ]);
            return $this->render('index', [

                'dataProvider' => $dataProvider,
                'searchModel'=>$searchModel
            ]);

                }

        else {


            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [

                'dataProvider' => $dataProvider,
                'searchModel'=>$searchModel

            ]);
        }
    }

    /**
     * Displays a single DarsJadval model.
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
     * Creates a new DarsJadval model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DarsJadval();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DarsJadval model.
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
     * Deletes an existing DarsJadval model.
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
     * Finds the DarsJadval model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DarsJadval the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DarsJadval::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
