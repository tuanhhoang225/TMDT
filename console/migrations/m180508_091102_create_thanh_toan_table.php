<?php

use yii\db\Migration;

/**
 * Handles the creation of table `thanh_toan`.
 */
class m180508_091102_create_thanh_toan_table extends Migration
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
        $this->createTable('thanh_toan', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'tai_khoan'=>$this->string()->notNull(),
            'ngan_hang'=>$this->string(),
            'chi_nhanh'=>$this->string(),
            'cost'=>$this->integer()
        ],$tableOptions);
        $this->addForeignKey('fk_thanh_toan_user','thanh_toan','user_id','user','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('thanh_toan');
    }
}
