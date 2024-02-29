<?php

use yii\db\Migration;

/**
 * Class m240227_132214_create_pessoas
 */
class m240227_132214_create_pessoas extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable("{{%pessoas}}", [
            "id"=> $this->primaryKey(),
            "nome" => $this->string(80)->notNull(),
        ]); 
    }

    public function down()
    {
        echo "m240227_132214_create_pessoas cannot be reverted.\n";
        $this->dropTable("{{%pessoas}}");

        return false;
    }
}
