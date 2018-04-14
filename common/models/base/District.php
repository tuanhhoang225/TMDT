<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property int $id
 * @property string $ten
 * @property string $ten_tieng_anh
 * @property string $cap
 * @property int $id_tinh
 *
 * @property Province $tinh
 * @property Order[] $orders
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'id_tinh'], 'required'],
            [['id_tinh'], 'integer'],
            [['ten', 'ten_tieng_anh', 'cap'], 'string', 'max' => 255],
            [['id_tinh'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['id_tinh' => 'id']],
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
            'id_tinh' => Yii::t('app', 'Id Tinh'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTinh()
    {
        return $this->hasOne(Province::className(), ['id' => 'id_tinh']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['district_id' => 'id']);
    }
}
