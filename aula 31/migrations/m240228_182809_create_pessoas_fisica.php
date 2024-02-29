<?php

use yii\db\Migration;

/**
 * Class m240228_182809_create_pessoas_fisica
 */
class m240228_182809_create_pessoas_fisica extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pessoas_fisica', [
            'pessoa_id' => $this->primaryKey(),
            'cpf' => $this->string(11)->notNull(),
        ]);

        $this->addForeignKey('fk_pessoa_pessoa_fisica', 'pessoas_fisica', 'pessoa_id', 'pessoas', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240228_182809_create_pessoas_fisica cannot be reverted.\n";

        $this->dropTable('pessoas');
        $this->dropForeignKey('fk_pessoa_pessoa_fisica', 'pessoas_fisica');
        
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240228_182809_create_pessoas_fisica cannot be reverted.\n";

        return false;
    }
    */
}
