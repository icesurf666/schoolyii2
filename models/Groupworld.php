<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groupworlds".
 *
 * @property int $id Первичный ключ
 * @property string $title
 * @property int $level
 *
 * @property Russianworlds[] $russianworlds
 */
class Groupworld extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'groupworlds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'level'], 'required'],
            [['level'], 'default', 'value' => null],
            [['level'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'level' => 'Level',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRussianworlds()
    {
        return $this->hasMany(Russianworlds::className(), ['id_groupworlds' => 'id']);
    }
}
