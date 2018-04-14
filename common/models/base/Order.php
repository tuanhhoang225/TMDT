<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $total_amount
 * @property string $create_at
 * @property string $address_detail
 * @property int $user_id
 * @property int $province_id
 * @property int $district_id
 *
 * @property District $district
 * @property Province $province
 * @property User $user
 * @property OrderDetail[] $orderDetails
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_amount', 'user_id', 'province_id', 'district_id'], 'integer'],
            [['create_at'], 'safe'],
            [['address_detail'], 'string', 'max' => 255],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'total_amount' => Yii::t('app', 'Total Amount'),
            'create_at' => Yii::t('app', 'Create At'),
            'address_detail' => Yii::t('app', 'Address Detail'),
            'user_id' => Yii::t('app', 'User ID'),
            'province_id' => Yii::t('app', 'Province ID'),
            'district_id' => Yii::t('app', 'District ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['order_id' => 'id']);
    }
}
