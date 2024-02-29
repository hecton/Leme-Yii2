<?php

use yii\db\Migration;

/**
 * Class m240227_201424_create_pessoas
 */
class m240227_201424_create_pessoas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pessoas', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'email' => $this->string(60)->notNull(),
            'idade' => $this->integer(3)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240227_201424_create_pessoas cannot be reverted.\n";

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
        echo "m240227_201424_create_pessoas cannot be reverted.\n";

        return false;
    }
    */
}
