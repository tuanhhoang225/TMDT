<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "location_image".
 *
 * @property int $id
 * @property string $title
 * @property string $key
 * @property int $status
 * @property int $released
 * @property string $slug
 *
 * @property Image[] $images
 */
class LocationImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'released'], 'integer'],
            [['title', 'key', 'slug'], 'string', 'max' => 255],
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
            'key' => Yii::t('app', 'Key'),
            'status' => Yii::t('app', 'Status'),
            'released' => Yii::t('app', 'Released'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['location_image_id' => 'id']);
    }
}
