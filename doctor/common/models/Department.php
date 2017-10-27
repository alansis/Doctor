<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $id
 * @property string $title
 * @property integer $year
 * @property integer $count_of_personal
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year', 'count_of_personal'], 'integer'],
            [['year', 'count_of_personal'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'string', 'required' ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'title' => 'Назва',
            'year' => 'Рік заснування',
            'count_of_personal' => 'Кількість персоналу',
        ];
    }

    public function getWorker()
    {
        return $this->hasMany(Workers::className(), ['department_id' => 'id']);
    }
}
