<?php

use yii\db\Migration;

/**
 * Class m181215_143542_AddBaseTables
 */
class m181215_143542_AddBaseTables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%groupworlds}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'title' => $this->string()->notNull(),
            'level' => $this->integer()->notNull(),
        ]);

        $this->createTable('{{%russianworlds}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'world' => $this->string()->notNull(),
            'image'=>$this->string(),
            'level_high' => $this->integer()->notNull(),
            'id_groupworlds'=>$this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_groupworlds_russianworlds', 'russianworlds', 'id_groupworlds', 'groupworlds', 'id');
        $this->createTable('{{%languages}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'language' => $this->string()->notNull(),
            ]);
        $this->createTable('{{%foreignworlds}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'translate' => $this->string()->notNull(),
            'sound'=>$this->string(),
            'picture' => $this->string(),
            'id_russianworlds'=>$this->integer()->notNull(),
            'id_languages'=>$this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_russianworlds_foreignworlds', 'foreignworlds', 'id_russianworlds', 'russianworlds', 'id');
        $this->addForeignKey('FK_languages_foreignworlds', 'foreignworlds', 'id_languages', 'languages', 'id');
        $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'sentence' => $this->string()->notNull(),
            'translate'=>$this->string(),
            'sound' => $this->string(),
            'true_answer'=>$this->string()->notNull(),
            'false_answer'=>$this->string()->notNull(),
            'id_languages'=>$this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_languages_tasks', 'tasks', 'id_languages', 'languages', 'id');
        $this->createTable('{{%usertasks}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'know' => $this->integer()->notNull(),
            'id_tasks'=>$this->integer()->notNull(),
            'id_user'=>$this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_tasks_usertasks', 'usertasks', 'id_tasks', 'tasks', 'id');
        $this->addForeignKey('FK_user_usertasks', 'usertasks', 'id_user', 'user', 'id');
        $this->createTable('{{%userworlds}}', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'isknow' => $this->integer()->notNull(),
            'id_foreignworlds'=>$this->integer()->notNull(),
            'id_user'=>$this->integer()->notNull(),
        ]);
        $this->addForeignKey('FK_foreignworlds_userworlds', 'userworlds', 'id_foreignworlds', 'foreignworlds', 'id');
        $this->addForeignKey('FK_user_userworlds', 'userworlds', 'id_user', 'user', 'id');




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181215_143542_AddBaseTables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181215_143542_AddBaseTables cannot be reverted.\n";

        return false;
    }
    */
}
