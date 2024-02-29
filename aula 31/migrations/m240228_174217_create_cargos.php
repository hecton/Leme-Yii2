<?php

use yii\db\Migration;

/**
 * Class m240228_174217_create_cargos
 */
class m240228_174217_create_cargos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("cargos", [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240228_174217_create_cargos cannot be reverted.\n";

        $this->dropTable("cargos");
        
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240228_174217_create_cargos cannot be reverted.\n";

        return false;
    }
    */
}
