<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "placemaps".
 *
 * @property integer $id
 * @property string $address
 */
class Placemaps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'placemaps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'name_of_setting'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Адреса',
            'name_of_setting' => 'Назва установи'
        ];
    }
}
