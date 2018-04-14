<?php

use yii\db\Migration;

/**
 * Handles the creation of table `huyen`.
 */
class m180317_081932_create_district_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%district}}', [
            'id' => $this->primaryKey(),
            'ten' => $this->string()->notNull(),
            'ten_tieng_anh' => $this->string(),
            'cap' => $this->string(),
            'id_tinh' => $this->integer()->notNull()
        ], $tableOptions);

        $this->addForeignKey('fk_district_province', 'district', 'id_tinh', 'province', 'id', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('district');
    }
}
