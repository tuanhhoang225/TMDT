<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180317_153517_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(),
            'title'=>$this->string(),
            'avatar'=>$this->string(),
            'price'=>$this->integer(),
            'amount'=>$this->integer(),
            'sale'=>$this->double(),
            'content'=>$this->text(),
        ],$tableOptions);
        $this->addForeignKey('fk_product_category', 'product','category_id', 'category', 'id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
