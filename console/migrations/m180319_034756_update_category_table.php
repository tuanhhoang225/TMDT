<?php

use yii\db\Migration;

/**
 * Class m180319_034756_update_category_table
 */
class m180319_034756_update_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category', 'slug', 'string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180319_034756_update_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180319_034756_update_category_table cannot be reverted.\n";

        return false;
    }
    */
}
