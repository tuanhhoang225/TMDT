<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $title
 * @property string $describe
 * @property string $key
 * @property int $status
 * @property int $released
 *
 * @property Category[] $categories
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
            'key' => Yii::t('app', 'Key'),
            'status' => Yii::t('app', 'Status'),
            'released' => Yii::t('app', 'Released'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['page_id' => 'id']);
    }
}
