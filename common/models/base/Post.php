<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $content
 * @property string $avatar
 * @property string $date
 * @property int $views
 * @property int $released
 * @property string $slug
 *
 * @property Category $category
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'views', 'released'], 'integer'],
            [['content', 'avatar'], 'string'],
            [['date'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'avatar' => Yii::t('app', 'Avatar'),
            'date' => Yii::t('app', 'Date'),
            'views' => Yii::t('app', 'Views'),
            'released' => Yii::t('app', 'Released'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
