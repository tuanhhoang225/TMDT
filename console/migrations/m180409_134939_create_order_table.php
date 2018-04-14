<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m180409_134939_create_order_table extends Migration
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
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'total_amount'=>$this->integer(),
            'create_at'=>$this->dateTime(),
            'address_detail'=>$this->string(),
            'user_id'=>$this->integer(),
            'province_id'=>$this->integer(),
            'district_id'=>$this->integer(),
        ],$tableOptions);
        $this->addForeignKey('fk_order_user','order','user_id','user','id','CASCADE');
        $this->addForeignKey('fk_order_province','order','province_id','province','id','CASCADE');
        $this->addForeignKey('fk_order_district','order','district_id','district','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }
}
