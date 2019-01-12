<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dyzur".
 *
 * @property int $ID_dyzur
 * @property int $ID_Funkcja
 * @property int $ID_Miejsce
 * @property string $Od_kiedy
 * @property string $Do_kiedy
 * @property int $ID_Pracownik
 */
class Dyzur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dyzur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_Funkcja', 'ID_Miejsce', 'Od_kiedy', 'Do_kiedy'], 'required'],
            [['ID_Funkcja', 'ID_Miejsce', 'ID_Pracownik'], 'integer'],
            [['Od_kiedy', 'Do_kiedy'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_dyzur' => 'Id Dyzur',
            'ID_Funkcja' => 'Id  Funkcja',
            'ID_Miejsce' => 'Id  Miejsce',
            'Od_kiedy' => 'Od Kiedy',
            'Do_kiedy' => 'Do Kiedy',
            'ID_Pracownik' => 'Id  Pracownik',
        ];
    }
}
