<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page`.
 */
class m180317_082309_create_page_table extends Migration
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
        $this->createTable('page', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'describe'=>$this->string(),
            'key'=>$this->string(),
            'status'=>$this->integer()->defaultValue(0),
            'released'=>$this->integer()->defaultValue(0),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('page');
    }
}
