<?php

use yii\db\Migration;

/**
 * Class m180319_040032_update_product_table
 */
class m180319_040032_update_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','slug','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180319_040032_update_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180319_040032_update_product_table cannot be reverted.\n";

        return false;
    }
    */
}
