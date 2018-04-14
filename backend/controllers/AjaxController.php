<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/19/2018
 * Time: 9:13 AM
 */
namespace backend\controllers;

use common\models\Category;
use common\models\Image;
use common\models\LocationImage;
use common\models\Page;
use common\models\Post;
use common\models\Product;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use common\models\Setting;

class AjaxController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionRelease()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['table'])) {
            $model = null;

            switch ($post['table']) {
                case 'location-image':
                    $model = LocationImage::findOne($post['id']);
                    break;
                case 'setting':
                    $model = Setting::findOne($post['id']);
                    break;
                case 'page':
                    $model = Page::findOne($post['id']);
                    break;
                case 'category':
                    $model = Category::findOne($post['id']);
                    break;
                case 'post':
                    $model = Post::findOne($post['id']);
                    break;

                default:
                    break;


            }


            if ($model) {
                $model->released = $model->released ? 0 : 1;

                return $model->save();
            }

        }

        return false;
    }
    public function actionStatus(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();
        if(isset($post['id']) && $post['table']){
            $model = null;
            switch ($post['table']){
                case 'setting':
                    $model = Setting::findOne($post['id']);
                    break;
                case 'location-image':
                    $model = LocationImage::findOne($post['id']);
                    break;
                case 'page':
                    $model = Page::findOne($post['id']);
                    break;
                case 'category':
                    $model = Category::findOne($post['id']);
                    break;
                default:
                    break;

            }

            if($model){
                $model->status = $model->status? 0 :1;
                return $model->save();
            }
        }


    }
}