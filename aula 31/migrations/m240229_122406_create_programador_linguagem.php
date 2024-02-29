<?php

use yii\db\Migration;

/**
 * Class m240229_122406_create_programador_linguagem
 */
class m240229_122406_create_programador_linguagem extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%programador_linguagem}}', [
            'programador_id'=> $this->integer()->notNull(),
            'linguagem_id'=> $this->integer()->notNull(),
        ]);

        $this->addForeignKey('fk_programador_id', 'programador_linguagem', 'programador_id', 'programadores', 'id');
        $this->addForeignKey('fk_linguagem_id', 'programador_linguagem', 'linguagem_id', 'linguagens', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240229_122406_create_programador_linguagem cannot be reverted.\n";

        $this->dropTable('{{%programador_linguagem}}');
        $this->dropForeignKey('fk_programador_id', 'programador_linguagem');
        $this->dropForeignKey('fk_linguagem_id', 'programador_linguagem');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240229_122406_create_programador_linguagem cannot be reverted.\n";

        return false;
    }
    */
}
