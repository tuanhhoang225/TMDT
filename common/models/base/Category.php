<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $page_id
 * @property string $title
 * @property string $describe
 * @property int $sequence
 * @property int $status
 * @property int $released
 * @property string $content
 * @property int $parent_id
 * @property string $slug
 *
 * @property Category $parent
 * @property Category[] $categories
 * @property Page $page
 * @property Post[] $posts
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id', 'sequence', 'status', 'released', 'parent_id'], 'integer'],
            [['content'], 'string'],
            [['title', 'describe', 'slug'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'page_id' => Yii::t('app', 'Page ID'),
            'title' => Yii::t('app', 'Title'),
            'describe' => Yii::t('app', 'Describe'),
            'sequence' => Yii::t('app', 'Sequence'),
            'status' => Yii::t('app', 'Status'),
            'released' => Yii::t('app', 'Released'),
            'content' => Yii::t('app', 'Content'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}
