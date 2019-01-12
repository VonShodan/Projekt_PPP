<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "funkcja".
 *
 * @property string $Nazwa
 * @property int $ID_Funkcja
 */
class Funkcja extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'funkcja';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nazwa'], 'required'],
            [['Nazwa'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nazwa' => 'Nazwa',
            'ID_Funkcja' => 'Id  Funkcja',
        ];
    }
}
