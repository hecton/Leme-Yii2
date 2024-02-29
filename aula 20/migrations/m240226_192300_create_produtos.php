<?php

use yii\db\Migration;

/**
 * Class m240226_192300_create_produtos
 */
class m240226_192300_create_produtos extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable("produtos", [
            'id' => $this->primaryKey(),
            'categoria_id' => $this->integer()->notNull(),
            'data_cadastro' => $this->dateTime()->notNull(),
            'nome' => $this->string(60)->notNull(),
            'descricao' => $this->text(),
            'valor' => $this->decimal(10, 2)->notNull(),
            'status' => $this->smallInteger()->defaultValue(1)->notNull(),
        ]);

        $this->addForeignKey('fk_produtos_categoria_id', 'produtos', 'categoria_id', 'categorias', 'id');
    }

    public function down()
    {
        echo "m240226_192300_create_produtos cannot be reverted.\n";

        $this->dropTable('produtos');
    }
}
