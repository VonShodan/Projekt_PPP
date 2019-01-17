<?php

namespace backend\models;

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
 *
 * @property Funkcja $funkcja
 * @property Miejsce $miejsce
 * @property User $pracownik
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
            [['ID_Funkcja'], 'exist', 'skipOnError' => true, 'targetClass' => Funkcja::className(), 'targetAttribute' => ['ID_Funkcja' => 'ID_Funkcja']],
            [['ID_Miejsce'], 'exist', 'skipOnError' => true, 'targetClass' => Miejsce::className(), 'targetAttribute' => ['ID_Miejsce' => 'ID_Miejsce']],
            [['ID_Pracownik'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['ID_Pracownik' => 'id']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFunkcja()
    {
        return $this->hasOne(Funkcja::className(), ['ID_Funkcja' => 'ID_Funkcja']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiejsce()
    {
        return $this->hasOne(Miejsce::className(), ['ID_Miejsce' => 'ID_Miejsce']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPracownik()
    {
        return $this->hasOne(User::className(), ['id' => 'ID_Pracownik']);
    }
}
