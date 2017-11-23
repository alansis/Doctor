<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property string $date
 * @property string $time_start
 * @property string $time_end
 * @property integer $doctor_id
 *
 * @property Workers $doctor
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'time_start', 'time_end'], 'safe'],
            [['date', 'time_start', 'time_end'], 'required'],
            [['doctor_id'], 'integer'],
            [['doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Workers::className(), 'targetAttribute' => ['doctor_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'date' => Yii::t('app', 'Дата прийому'),
            'time_start' => Yii::t('app', 'Початок прийому'),
            'time_end' => Yii::t('app', 'Завершення прийому'),
            'doctor_id' => Yii::t('app', 'Doctor ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Workers::className(), ['id' => 'doctor_id']);
    }

    public function getWorker(){
        $worker = new Workers();
        return $worker::find()->where(['user_id' => Yii::$app->user->identity->getId()])->one();
    }

}
