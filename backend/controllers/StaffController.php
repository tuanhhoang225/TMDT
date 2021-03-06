<?php

namespace backend\controllers;

use common\models\SignupForm;
use Yii;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\base\SeniorController;
/**
 * StaffController implements the CRUD actions for User model.
 */
class StaffController extends SeniorController
{


    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $staff= User::find()->where(['=','permission','RULE_ADMIN'])->all();

        return $this->render('index', [
            'staff' => $staff,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $staff= User::find()->where(['=','permission','RULE_ADMIN'])->all();
        return $this->render('index', [
            'staff' => $staff,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $user = $model->signup() ) {
            $user->permission = User::RULE_ADMIN;
            $user->save();
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     */
    public function actionUpdate($id)
    {
        $model= new SignupForm();

        $user = $this->findModel($id);

        $model->full_name = $user['full_name'];
        $model->username = $user['username'];
        $model->password = $user['password_hash'];
        $model->avatar = $user['avatar'];
        $model->phone = $user['phone'];
        $model->email = $user['email'];
        $model->address = $user['address'];
        $model->province_id = $user['province_id'];
        $model->district_id = $user['district_id'];
        $model->permission = User::RULE_ADMIN;

        if ($model->load(Yii::$app->request->post()) && $model->update($id) ) {

            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
