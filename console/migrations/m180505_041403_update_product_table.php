<?php

use yii\db\Migration;

/**
 * Class m180505_041403_update_product_table
 */
class m180505_041403_update_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','released',$this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180505_041403_update_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180505_041403_update_product_table cannot be reverted.\n";

        return false;
    }
    */
}
