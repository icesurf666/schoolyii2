<?php

use yii\db\Migration;

/**
 * Class m190122_064112_AddRolesToUsers
 */
class m190122_064112_AddRolesToUsers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $user = new \app\models\User();
        $user->setPassword('123456');
        $user->email = 'student@mail.ru';
        $user->username = 'student';
        $user->generateAuthKey();
        $user->save();
        $user = new \app\models\User();
        $user->setPassword('123456');
        $user->email = 'teacher@mail.ru';
        $user->username = 'teacher';
        $user->generateAuthKey();
        $user->save();
        $rbac = \Yii::$app->authManager;
        $admin = $rbac->getRole('admin');
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'admin'])->id
        );
        $admin = $rbac->getRole('teacher');
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'teacher'])->id
        );
        $admin = $rbac->getRole('student');
        $rbac->assign(
            $admin,
            \app\models\User::findOne([
                'username' => 'student'])->id
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190122_064112_AddRolesToUsers cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190122_064112_AddRolesToUsers cannot be reverted.\n";

        return false;
    }
    */
}
