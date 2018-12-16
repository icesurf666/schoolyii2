<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id Первичный ключ
 * @property string $sentence
 * @property string $translate
 * @property string $sound
 * @property string $true_answer
 * @property string $false_answer
 * @property int $id_languages
 *
 * @property Languages $languages
 * @property Usertasks[] $usertasks
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sentence', 'true_answer', 'false_answer', 'id_languages'], 'required'],
            [['id_languages'], 'default', 'value' => null],
            [['id_languages'], 'integer'],
            [['sentence', 'translate', 'sound', 'true_answer', 'false_answer'], 'string', 'max' => 255],
            [['id_languages'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['id_languages' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sentence' => 'Sentence',
            'translate' => 'Translate',
            'sound' => 'Sound',
            'true_answer' => 'True Answer',
            'false_answer' => 'False Answer',
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
    public function getUsertasks()
    {
        return $this->hasMany(Usertasks::className(), ['id_tasks' => 'id']);
    }
}
