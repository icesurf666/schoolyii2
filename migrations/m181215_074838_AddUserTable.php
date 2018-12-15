<?php

use yii\db\Migration;

/**
 * Class m181215_074838_AddUserTable
 */
class m181215_074838_AddUserTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'username' => $this->string()->notNull()->unique(),
            'password_hash' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->integer()->notNull()->defaultValue(app\models\User::STATUS_ACTIVE),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181215_074838_AddUserTable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181215_074838_AddUserTable cannot be reverted.\n";

        return false;
    }
    */
}
