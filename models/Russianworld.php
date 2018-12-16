<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "russianworlds".
 *
 * @property int $id Первичный ключ
 * @property string $world
 * @property string $image
 * @property int $level_high
 * @property int $id_groupworlds
 *
 * @property Foreignworlds[] $foreignworlds
 * @property Groupworlds $groupworlds
 */
class Russianworld extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'russianworlds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['world', 'level_high', 'id_groupworlds'], 'required'],
            [['level_high', 'id_groupworlds'], 'default', 'value' => null],
            [['level_high', 'id_groupworlds'], 'integer'],
            [['world', 'image'], 'string', 'max' => 255],
            [['id_groupworlds'], 'exist', 'skipOnError' => true, 'targetClass' => Groupworld::className(), 'targetAttribute' => ['id_groupworlds' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'world' => 'World',
            'image' => 'Image',
            'level_high' => 'Level High',
            'id_groupworlds' => 'Id Groupworlds',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForeignworlds()
    {
        return $this->hasMany(Foreignworlds::className(), ['id_russianworlds' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupworlds()
    {
        return $this->hasOne(Groupworlds::className(), ['id' => 'id_groupworlds']);
    }
}
