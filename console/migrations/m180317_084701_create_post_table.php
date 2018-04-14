<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m180317_084701_create_post_table extends Migration
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

        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(),
            'title'=>$this->string(),
            'content'=>$this->text(),
            'avatar'=>$this->text(),
            'date'=>$this->date(),
            'views'=>$this->integer(),
            'released'=>$this->integer()->defaultValue(0),
            'slug'=>$this->string(),
        ], $tableOptions);
        $this->addForeignKey('fk_post_category', 'post', 'category_id', 'category', 'id','CASCADE');
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
    }
}
