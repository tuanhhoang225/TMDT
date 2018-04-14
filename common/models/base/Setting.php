<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property int $id
 * @property string $title
 * @property string $describe
 * @property string $content
 * @property string $key
 * @property int $status
 * @property int $released
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
            [['content'], 'string'],
            [['status', 'released'], 'integer'],
            [['title', 'describe', 'key'], 'string', 'max' => 255],
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
            'describe' => Yii::t('app', 'Describe'),
            'content' => Yii::t('app', 'Content'),
            'key' => Yii::t('app', 'Key'),
            'status' => Yii::t('app', 'Status'),
            'released' => Yii::t('app', 'Released'),
        ];
    }
}
