<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $title
 * @property int $location_image_id
 *
 * @property LocationImage $locationImage
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location_image_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['location_image_id'], 'exist', 'skipOnError' => true, 'targetClass' => LocationImage::className(), 'targetAttribute' => ['location_image_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'location_image_id' => Yii::t('app', 'Location Image ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocationImage()
    {
        return $this->hasOne(LocationImage::className(), ['id' => 'location_image_id']);
    }
}
