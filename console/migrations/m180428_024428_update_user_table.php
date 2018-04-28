<?php

use yii\db\Migration;

/**
 * Class m180428_024428_update_user_table
 */
class m180428_024428_update_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'full_name', $this->string());
        $this->addColumn('user', 'avatar', $this->string());
        $this->addColumn('user', 'province_id', $this->integer());
        $this->addColumn('user', 'district_id', $this->integer());
        $this->addColumn('user', 'address', $this->string());
        $this->addColumn('user', 'phone', $this->string());
        $this->addForeignKey('fk_user_province','user','province_id','province','id','CASCADE');
        $this->addForeignKey('fk_user_district','user','district_id','district','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180428_024428_update_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180428_024428_update_user_table cannot be reverted.\n";

        return false;
    }
    */
}
