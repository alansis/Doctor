<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property integer $id
 * @property integer $department_id
 * @property string $Name
 * @property string $Subname
 * @property string $Surname
 * @property string $Passport_id
 * @property string $Specialization
 * @property string $Position
 *
 * @property Department $department
 */
class Workers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_id'], 'integer'],
            [['department_id'], 'required'],
            [['Name', 'Subname', 'Surname', 'Passport_id', 'Specialization', 'Position'], 'string', 'max' => 255],
            [['Name', 'Subname', 'Surname', 'Passport_id', 'Specialization', 'Position'], 'required'],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['department_id'], 'required'],
            [['user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'Назва відділення',
            'Name' => 'Імя',
            'Subname' => 'Прізвище',
            'Surname' => 'Побатькові',
            'Passport_id' => 'Номер паспорту',
            'Specialization' => 'Спеціалізація',
            'Position' => 'Посада',
            'user_id' => 'Лікар'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    public function addRole($ThisUser){
        $doctorRole = Yii::$app->authManager->getRole('doctor');
        Yii::$app->authManager->assign($doctorRole, $ThisUser->id);
    }




}
