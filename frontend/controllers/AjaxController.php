<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/19/2018
 * Time: 9:13 AM
 */

namespace frontend\controllers;


use common\models\Product;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\helpers\Url;
class AjaxController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }


    public function actionSearch()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['key'])) {
            $query = Product::find()->joinWith('category')->where(['like', 'product.title', $post['key']]);
            $products = $query->limit(8)->asArray()->all();
            foreach ($products as $key=> $value){
                $products[$key]['href'] = Url::to(['site/view','category_slug'=>$value['category']['slug'],'content_slug' => $value['slug']]);
            }

            return $products;
        }
        return false;

    }

}