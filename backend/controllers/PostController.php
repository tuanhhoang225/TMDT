<?php

namespace backend\controllers;

use common\helpers\FunctionHelper;
use Yii;
use common\models\Post;
use common\models\base\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\controllers\base\AdminController;
use yii\data\Pagination;
/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends AdminController
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
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Post::find();
       $pagination = new Pagination([
           'defaultPageSize' => 10,
           'totalCount' => $query->count(),
       ]);
        $posts = $query->offset($pagination->offset)->limit($pagination->limit)
            ->orderBy('id DESC')->all();
        return $this->render('index', [
            'posts'=>$posts,
            'pages'=> $pagination
        ]);
    }

    /**
     * Displays a single Post model.
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
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post())) {
            $model->date = Yii::$app->formatter->asDate('now', 'php:Y-m-d') ;
            $model->images = UploadedFile::getInstances($model, 'images');

            if ($name = $model->upload()) {
                $model->avatar = $name;
            }

            if ($model->save()) {
                $model->slug=FunctionHelper::changeTitle($model->title)."-".$model->id;
                return $this->redirect(['index', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->images = UploadedFile::getInstances($model, 'images');

            if ($name = $model->upload()) {
                $model->avatar = $name;
            }

            if ($model->save()) {
                $model->slug=FunctionHelper::changeTitle($model->title)."-".$model->id;
                return $this->redirect(['index', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
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
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
