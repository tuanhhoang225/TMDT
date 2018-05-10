<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shopping_cart`.
 */
class m180409_143626_create_shopping_cart_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('shopping_cart', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer()->notNull(),
            'product_id'=>$this->integer()->notNull(),
            'quantily'=>$this->integer()->notNull(),
            'date_time'=>$this->dateTime()
        ],$tableOptions);
        $this->addForeignKey('fk_shopping_cart_user','shopping_cart','user_id','user','id','CASCADE');
        $this->addForeignKey('fk_shopping_cart_product','shopping_cart','product_id','product','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shopping_cart');
    }
}
