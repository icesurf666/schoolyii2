<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usertasks".
 *
 * @property int $id Первичный ключ
 * @property int $know
 * @property int $id_tasks
 * @property int $id_user
 *
 * @property Tasks $tasks
 * @property User $user
 */
class Usertask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usertasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['know', 'id_tasks', 'id_user'], 'required'],
            [['know', 'id_tasks', 'id_user'], 'default', 'value' => null],
            [['know', 'id_tasks', 'id_user'], 'integer'],
            [['id_tasks'], 'exist', 'skipOnError' => true, 'targetClass' => Task::className(), 'targetAttribute' => ['id_tasks' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'know' => 'Know',
            'id_tasks' => 'Id Tasks',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasOne(Tasks::className(), ['id' => 'id_tasks']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
