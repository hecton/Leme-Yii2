<?php

use yii\db\Migration;

/**
 * Class m240228_182750_create_pessoas
 */
class m240228_182750_create_pessoas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("pessoas", [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240228_182750_create_pessoas cannot be reverted.\n";

        $this->dropTable('pessoas');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240228_182750_create_pessoas cannot be reverted.\n";

        return false;
    }
    */
}
