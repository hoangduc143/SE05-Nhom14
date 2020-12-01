<?php

use yii\db\Migration;

/**
 * Class m201124_155247_product
 */
class m201124_155247_product extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'productname' => $this->string()->notNull()->unique(),
            'description' => $this->string()->notNull(),
            'direction' => $this->string()->notNull()->unique(),
            'created_at' => $this->integer()->notNull(),
            'created_by' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');
    }
}
