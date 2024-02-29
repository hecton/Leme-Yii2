<?php

use yii\db\Migration;

/**
 * Class m240229_122347_create_linguagens
 */
class m240229_122347_create_linguagens extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%linguagens}}', [
            'id'=> $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240229_122347_create_linguagens cannot be reverted.\n";
        $this->dropTable('{{%linguagens}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240229_122347_create_linguagens cannot be reverted.\n";

        return false;
    }
    */
}
