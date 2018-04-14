<?php

use yii\db\Migration;

/**
 * Handles the creation of table `location_image`.
 */
class m180317_154819_create_location_image_table extends Migration
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
        $this->createTable('location_image', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'key'=>$this->string(),
            'status'=>$this->integer()->defaultValue(0),
            'released'=>$this->integer()->defaultValue(0),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('location_image');
    }
}
