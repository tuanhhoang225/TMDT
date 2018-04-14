<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180317_083337_create_category_table extends Migration
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

        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'page_id'=>$this->integer(),
            'title'=>$this->string(),
            'describe'=>$this->string(),
            'sequence'=>$this->integer(),
            'status'=>$this->integer()->defaultValue(0),
            'released'=>$this->integer()->defaultValue(0),
            'content'=>$this->text(),
            'parent_id'=>$this->integer(),
        ], $tableOptions);
        $this->addForeignKey('fk_category_page', 'category', 'page_id', 'page', 'id', 'CASCADE');
        $this->addForeignKey('fk_category_category', 'category', 'parent_id', 'category', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
