<?php

use yii\db\Migration;

/**
 * Class m240226_191702_create_categoria
 */
class m240226_191702_create_categoria extends Migration
{
    public function up()
    {
        $this->createTable("categorias", [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'data_cadastro' => $this->dateTime()->notNull(),
        ]);

        $this->insert('categorias', 
            ['nome' => 'cate1', 'data_cadastro' => date('Y-m-d H:i:s') ]
        );
    }


    public function down()
    {
        echo "m240226_191702_create_categoria cannot be reverted.\n";

        $this->dropTable('categorias');

        // return false;
    }
}
