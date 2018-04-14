<?php

namespace backend\controllers;

use backend\controllers\base\BaseController;
use common\helpers\FunctionHelper;
use common\models\;
use common\models\Tinh;
use common\models\Xa;
use Yii;
use common\models\ThongTinChung;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ThongTinChungController implements the CRUD actions for ThongTinChung model.
 */
class ThongTinChungController extends Controller
{
    /**
     * Lists all ThongTinChung models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = $this->findModel(1);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('index', [
            'model' => $model
        ]);

    }

    /**
     * Finds the ThongTinChung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ThongTinChung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionImportProvince()
    {
        if (!Tinh::find()->asArray()->all()) {
            $table = 'tinh';
            $attributes = [
                'A' => 'id',
                'B' => 'ten',
                'C' => 'ten_tieng_anh',
                'D' => 'cap'
            ];

            $file = '../../uploads/core/excel/tinh.xlsx';

            $start = 2;
            $end = 64;

            FunctionHelper::importDataExcel($table, $attributes, $file, $start, $end);
        }

        return $this->redirect(['site/index']);
    }

    public function actionImportDistrict()
    {
        if (!Huyen::find()->asArray()->all()) {
            $table = 'huyen';
            $attributes = [
                'A' => 'id',
                'B' => 'ten',
                'C' => 'ten_tieng_anh',
                'D' => 'cap',
                'E' => 'id_tinh'
            ];

            $file = '../../uploads/core/excel/huyen.xlsx';

            $start = 2;
            $end = 714;

            FunctionHelper::importDataExcel($table, $attributes, $file, $start, $end);
        }

        return $this->redirect(['site/index']);
    }

    public function actionImportCommune()
    {
        if (!Xa::find()->asArray()->all()) {
            $table = 'xa';
            $attributes = [
                'A' => 'id',
                'B' => 'ten',
                'C' => 'ten_tieng_anh',
                'D' => 'cap',
                'E' => 'id_huyen',
                'G' => 'id_tinh'
            ];

            $file = '../../uploads/core/excel/xa.xlsx';

            $start = 2;
            $end = 11163;

            FunctionHelper::importDataExcel($table, $attributes, $file, $start, $end);
        }

        return $this->redirect(['site/index']);
    }
}