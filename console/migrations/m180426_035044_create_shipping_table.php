<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shipping`.
 */
class m180426_035044_create_shipping_table extends Migration
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
        $this->createTable('shipping', [
            'id' => $this->primaryKey(),
            'type'=>$this->string(),
            'cost'=>$this->string(),
            'province_id'=>$this->integer()
        ],$tableOptions);
        $this->addForeignKey('fk_shipping_province','shipping','province_id','province','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shipping');
    }
}
