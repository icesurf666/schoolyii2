<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foreignworlds".
 *
 * @property int $id Первичный ключ
 * @property string $translate
 * @property string $sound
 * @property string $picture
 * @property int $id_russianworlds
 * @property int $id_languages
 *
 * @property Languages $languages
 * @property Russianworlds $russianworlds
 * @property Userworlds[] $userworlds
 */
class Foreignworld extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foreignworlds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['translate', 'id_russianworlds', 'id_languages'], 'required'],
            [['id_russianworlds', 'id_languages'], 'default', 'value' => null],
            [['id_russianworlds', 'id_languages'], 'integer'],
            [['translate', 'sound', 'picture'], 'string', 'max' => 255],
            [['id_languages'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['id_languages' => 'id']],
            [['id_russianworlds'], 'exist', 'skipOnError' => true, 'targetClass' => Russianworld::className(), 'targetAttribute' => ['id_russianworlds' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'translate' => 'Translate',
            'sound' => 'Sound',
            'picture' => 'Picture',
            'id_russianworlds' => 'Id Russianworlds',
            'id_languages' => 'Id Languages',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguages()
    {
        return $this->hasOne(Languages::className(), ['id' => 'id_languages']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRussianworlds()
    {
        return $this->hasOne(Russianworlds::className(), ['id' => 'id_russianworlds']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserworlds()
    {
        return $this->hasMany(Userworlds::className(), ['id_foreignworlds' => 'id']);
    }
}
