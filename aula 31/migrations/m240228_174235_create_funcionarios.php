<?php

use yii\db\Migration;

/**
 * Class m240228_174235_create_funcionarios
 */
class m240228_174235_create_funcionarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("funcionarios", [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'cargo_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey('fk_funcionarios_cargo_id', 'funcionarios', 'cargo_id', 'cargos', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240228_174235_create_funcionarios cannot be reverted.\n";

        $this->dropForeignKey('fk_funcionarios_cargo_id', 'funcionarios');
        $this->dropTable('funcionarios');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240228_174235_create_funcionarios cannot be reverted.\n";

        return false;
    }
    */
}
