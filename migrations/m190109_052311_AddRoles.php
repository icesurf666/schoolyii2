<?php

use yii\db\Migration;

/**
 * Class m190109_052311_AddRoles
 */
class m190109_052311_AddRoles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $rbac = \Yii::$app->authManager;
        $guest = $rbac->createRole('guest');
        $guest->description = 'Гость';
        $rbac->add($guest);
        $student = $rbac->createRole('student');
        $student->description = 'Студент';
        $rbac->add($student);
        $teacher = $rbac->createRole('teacher');
        $teacher->description = 'Преподаватель';
        $rbac->add($teacher);
        $admin = $rbac->createRole('admin');
        $admin->description = 'Может всё';
        $rbac->add($admin);
        $rbac->addChild($admin, $teacher);
        $rbac->addChild($teacher, $student);
        $rbac->addChild($student, $guest);
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'user1'])->id
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $teacher = \Yii::$app->authManager;
        $teacher->removeAll();

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190109_052311_AddRoles cannot be reverted.\n";

        return false;
    }
    */
}
