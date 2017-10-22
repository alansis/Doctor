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
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'year' => 'Year',
            'count_of_personal' => 'Count Of Personal',
        ];
    }

    public function getWorker()
    {
        return $this->hasMany(Workers::className(), ['department_id' => 'id']);
    }
}
