<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "callfordoctor".
 *
 * @property integer $id
 * @property string $Name
 * @property string $Subname
 * @property string $Surname
 * @property string $Description
 * @property string $Street
 * @property integer $Bilding
 * @property integer $apartment
 * @property string $Passport_id
 */
class Callfordoctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'callfordoctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description'], 'string'],
            [['Description'], 'required'],
            [['Bilding', 'apartment'], 'integer'],
            [['Bilding', 'apartment'], 'required'],
            [['Name', 'Subname', 'Surname', 'Street', 'Passport_id'], 'string'],
            [['Name', 'Subname', 'Surname', 'Street', 'Passport_id'], 'required'],
            [['MobilePhone'], 'string'],
            [['MobilePhone'], 'required'],
            [['HomePhone'], 'string'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Імя',
            'Subname' => 'Прізвище',
            'Surname' => 'Побатькові',
            'Description' => 'Опис проблеми',
            'Street' => 'Вулиця',
            'Bilding' => 'Будинок',
            'apartment' => 'Квартира',
            'Passport_id' => 'Номер паспорта',
            'MobilePhone' => 'Мобільний номер',
            'HomePhone' => 'Домашній номер',
        ];
    }


}
