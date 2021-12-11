<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Mandat;
use frontend\models\MandatSearch;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MandatController implements the CRUD actions for Mandat model.
 */
class MandatController extends Controller
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
     * Lists all Mandat models.
     * @return mixed
     */
    public function actionIndex(string $shakli = null, string $tili = null, string $yunalish = null)
    {
        $model = [];
        $yunalishlar = [];
        $s1 = '=== Давлат грантлари асосида қабул ===';
        $s2 = '=== Давлат грантлари асосида қўшимча қабул (Ҳарбий қисм қўмондонлигининг тавсияномасига эга бўлганлар ) ===';
        $s3 = '=== Давлат грантлари асосида қўшимча қабул [4] (Ногиронлиги бўлган шахс) ===';
        $s4 = '=== Давлат грантлари асосида қўшимча қабул [5] (Ҳарбий хизматчи фарзанди) ===';
        $s5 = '=== Давлат грантлари асосида қўшимча қабул [6] (ИИВ таркибига кирувчи орган ходими фарзанди) ===';
        $s6 = '=== Давлат грантлари асосида қўшимча қабул [7] (Меҳрибонлик уйи битирувчиси бўлган чин етимлар) ===';
        $s7 = '=== Давлат грантлари асосида қўшимча қабул [8] (Хотин-қизлар) ===';
        $s8 = '=== Тўлов-контракт асосида қабул ===';
        $s9 = '=== Тўлов-контракт асосида (Ҳарбий қисм қўмондонлигининг тавсияномасига эга бўлганлар ) ===';
        if (isset($shakli, $tili, $yunalish)) {
            $model = Mandat::find()
                ->where(['EN' => $shakli, 'LN' => $tili, 'MN' => $yunalish])
                ->orderBy([new Expression('FIELD ( AccName, "' . $s1 . '","' . $s2 . '","' . $s3 . '","' . $s4 . '","' . $s5 . '","' . $s6 . '","' . $s7 . '","' . $s8 . '","' . $s9 . '")'), 'NComBall' => SORT_DESC])
//                ->groupBy(['AccName'])->select(['AccName'])
                ->all();
        }
        if (isset($shakli, $tili)) {
            $yunalishlar = ArrayHelper::map(Mandat::find()->groupBy(['MN'])->select(['MN', 'EN', 'LN'])->where(['EN' => $shakli, 'LN' => $tili])->all(), 'MN', 'MN');
        }
        return $this->render('index', [
            'model' => $model,
            'shakli' => $shakli,
            'tili' => $tili,
            'yunalish' => $yunalish,
            'yunalishlar' => $yunalishlar,
        ]);
    }

    /**
     * //     * Displays a single Mandat model.
     * //     * @param integer $id
     * //     * @return mixed
     * //     * @throws NotFoundHttpException if the model cannot be found
     * //     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }
//
//    /**
//     * Creates a new Mandat model.
//     * If creation is successful, the browser will be redirected to the 'view' page.
//     * @return mixed
//     */
//    public function actionCreate()
//    {
//        $model = new Mandat();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('create', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * Updates an existing Mandat model.
//     * If update is successful, the browser will be redirected to the 'view' page.
//     * @param integer $id
//     * @return mixed
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('update', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * Deletes an existing Mandat model.
//     * If deletion is successful, the browser will be redirected to the 'index' page.
//     * @param integer $id
//     * @return mixed
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    public function actionDelete($id)
//    {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//    }
//
//    /**
//     * Finds the Mandat model based on its primary key value.
//     * If the model is not found, a 404 HTTP exception will be thrown.
//     * @param integer $id
//     * @return Mandat the loaded model
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    protected function findModel($id)
//    {
//        if (($model = Mandat::findOne($id)) !== null) {
//            return $model;
//        }
//
//        throw new NotFoundHttpException('The requested page does not exist.');
//    }
}
