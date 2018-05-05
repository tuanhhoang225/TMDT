<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property int $id
 * @property string $title
 * @property string $avatar
 * @property string $key
 * @property string $describe
 * @property string $content
 * @property int $released
 * @property int $status
 * @property string $slug
 * @property string $images
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'key'], 'required'],
            [['content', 'images'], 'string'],
            [['released', 'status'], 'integer'],
            [['title', 'avatar', 'key', 'describe', 'slug'], 'string', 'max' => 255],
            [['key'], 'unique'],
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
            'avatar' => Yii::t('app', 'Avatar'),
            'key' => Yii::t('app', 'Key'),
            'describe' => Yii::t('app', 'Describe'),
            'content' => Yii::t('app', 'Content'),
            'released' => Yii::t('app', 'Released'),
            'status' => Yii::t('app', 'Status'),
            'slug' => Yii::t('app', 'Slug'),
            'images' => Yii::t('app', 'Images'),
        ];
    }
}
