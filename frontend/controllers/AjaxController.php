<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/19/2018
 * Time: 9:13 AM
 */

namespace frontend\controllers;

use common\models\District;
use common\models\Product;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\helpers\Url;
use common\models\ShoppingCart;
use common\models\User;
use yii\web\NotFoundHttpException;

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
            $products = $query->limit(9)->asArray()->all();
            foreach ($products as $key => $value) {
                $products[$key]['href'] = Url::to(['site/view', 'category_slug' => $value['category']['slug'], 'content_slug' => $value['slug']]);
            }

            return $products;
        }
        return false;

    }

    public function actionGetDistrictByProvinceId($province_id)
    {
        $districts = District::find()
            ->where(['id_tinh' => $province_id])
            ->orderBy('id DESC')
            ->all();
        echo "<option value=''>" . Yii::t('app', '-- Chọn Huyện --') . "</option>";
        foreach ($districts as $key => $value):
            echo "<option value=" . $value['id'] . ">" . $value['ten'] . "</option>";
        endforeach;
    }

    /**
     * @return bool|null|static
     */
    public function actionAddCart()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();
        if (isset($post['product_id']) && $post['user_id']) {
            $cart_old = null;
            $cart_old = ShoppingCart::find()->where(['=','product_id',$post['product_id']])->andWhere(['=','user_id',$post['user_id']])->one();
            if($cart_old){
                $cart_old['quantily'] = $cart_old['quantily']+1 ;
                return $cart_old->save();
            }
            else{
                $cart = new ShoppingCart();
                $cart->user_id = $post['user_id'];
                $cart->product_id = $post['product_id'];
                $cart->quantily = 1;
                $cart->date_time = date('Y-m-d H:i:s',7*3600+time());
                return $cart->save();
            }


        }
        return false;
    }


}