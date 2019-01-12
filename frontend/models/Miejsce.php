<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "miejsce".
 *
 * @property int $ID_Miejsce
 * @property string $Nazwa
 */
class Miejsce extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'miejsce';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_Miejsce', 'Nazwa'], 'required'],
            [['ID_Miejsce'], 'integer'],
            [['Nazwa'], 'string', 'max' => 100],
            [['ID_Miejsce'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_Miejsce' => 'Id  Miejsce',
            'Nazwa' => 'Nazwa',
        ];
    }
}
