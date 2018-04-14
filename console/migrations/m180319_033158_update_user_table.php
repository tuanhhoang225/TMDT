<?php

use yii\db\Migration;

/**
 * Class m180319_033158_update_user_table
 */
class m180319_033158_update_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','permission',$this->string()->defaultValue('RULE_USER'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180319_033158_update_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180319_033158_update_user_table cannot be reverted.\n";

        return false;
    }
    */
}
