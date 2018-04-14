<?php

namespace backend\controllers;

use common\helpers\FunctionHelper;
use common\models\Province;
use common\models\District;
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
     * Finds the ThongTinChung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ThongTinChung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    /**
     * @return \yii\web\Response
     */
    public function actionImportProvince()
    {
        if (!Province::find()->asArray()->all()) {
            $table = 'province';
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

    /**
     * @return \yii\web\Response
     */
    public function actionImportDistrict()
    {
        if (!District::find()->asArray()->all()) {
            $table = 'district';
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

}