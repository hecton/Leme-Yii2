<?php

use yii\db\Migration;
use app\models\Pessoa;

/**
 * Class m240227_134948_add_file_in_pessoas
 */
class m240227_134948_add_file_in_pessoas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Pessoa::tableName(),"file", $this->string(60));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240227_134948_add_file_in_pessoas cannot be reverted.\n";

        $this->dropColumn(Pessoa::tableName(),"file");

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240227_134948_add_file_in_pessoas cannot be reverted.\n";

        return false;
    }
    */
}
