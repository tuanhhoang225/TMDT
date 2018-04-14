<?php

use yii\db\Migration;

/**
 * Handles the creation of table `image`.
 */
class m180317_155923_create_image_table extends Migration
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

        $this->createTable('image', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'location_image_id'=>$this->integer(),

        ],$tableOptions);
        $this->addForeignKey('fk_image_location_image', 'image','location_image_id', 'location_image', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('image');
    }
}
