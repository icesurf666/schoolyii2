<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userworlds".
 *
 * @property int $id Первичный ключ
 * @property int $isknow
 * @property int $id_foreignworlds
 * @property int $id_user
 *
 * @property Foreignworlds $foreignworlds
 * @property User $user
 */
class Userworld extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userworlds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isknow', 'id_foreignworlds', 'id_user'], 'required'],
            [['isknow', 'id_foreignworlds', 'id_user'], 'default', 'value' => null],
            [['isknow', 'id_foreignworlds', 'id_user'], 'integer'],
            [['id_foreignworlds'], 'exist', 'skipOnError' => true, 'targetClass' => Foreignworld::className(), 'targetAttribute' => ['id_foreignworlds' => 'id']],
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
            'isknow' => 'Isknow',
            'id_foreignworlds' => 'Id Foreignworlds',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForeignworlds()
    {
        return $this->hasOne(Foreignworlds::className(), ['id' => 'id_foreignworlds']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
