<?php

use yii\db\Migration;

/**
 * Class m240229_122336_create_programadores
 */
class m240229_122336_create_programadores extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%programadores}}', [
            'id'=> $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'github'=> $this->string(60)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240229_122336_create_programadores cannot be reverted.\n";

        $this->dropTable('{{%programadores}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240229_122336_create_programadores cannot be reverted.\n";

        return false;
    }
    */
}
