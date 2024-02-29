<?php

use yii\db\Migration;

/**
 * Class m240228_161949_create_clientes
 */
class m240228_161949_create_clientes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clientes}}', [
            'id'=> $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'code' => $this->string(10),
            'slug' => $this->string(60),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240228_161949_create_clientes cannot be reverted.\n";

        $this->dropTable('{{%clientes}}');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240228_161949_create_clientes cannot be reverted.\n";

        return false;
    }
    */
}
