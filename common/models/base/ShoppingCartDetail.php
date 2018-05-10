<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "shopping_cart_detail".
 *
 * @property int $id
 * @property int $product_id
 * @property int $quantily
 * @property int $shopping_cart_id
 *
 * @property Product $product
 * @property ShoppingCart $shoppingCart
 */
class ShoppingCartDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shopping_cart_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'shopping_cart_id'], 'required'],
            [['product_id', 'quantily', 'shopping_cart_id'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['shopping_cart_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShoppingCart::className(), 'targetAttribute' => ['shopping_cart_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'quantily' => Yii::t('app', 'Quantily'),
            'shopping_cart_id' => Yii::t('app', 'Shopping Cart ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingCart()
    {
        return $this->hasOne(ShoppingCart::className(), ['id' => 'shopping_cart_id']);
    }
}
