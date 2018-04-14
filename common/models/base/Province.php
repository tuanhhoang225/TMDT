<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property int $id
 * @property string $ten
 * @property string $ten_tieng_anh
 * @property string $cap
 *
 * @property District[] $districts
 * @property Order[] $orders
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten'], 'required'],
            [['ten', 'ten_tieng_anh', 'cap'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ten' => Yii::t('app', 'Ten'),
            'ten_tieng_anh' => Yii::t('app', 'Ten Tieng Anh'),
            'cap' => Yii::t('app', 'Cap'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(District::className(), ['id_tinh' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['province_id' => 'id']);
    }
}
