<?php

use yii\db\Migration;

/**
 * Class m190122_063934_AddAuthkeyToUser
 */
class m190122_063934_AddAuthkeyToUser extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'auth_key', $this->string(32));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'auth_key');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190122_063934_AddAuthkeyToUser cannot be reverted.\n";

        return false;
    }
    */
}
