<?php


use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\datecontrol\DateControl;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $model common\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="schedule-form">

    <?php if($url): ?>
        <div class="requst_form" align="left">
            <p>Прийом створенно</p>
            <?= Html::a('Створити новий прийом', ['/schedule/create'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Перейти на домашню сторінку', ['site/index'], ['class'=>'btn btn-primary']) ?>
        </div>

    <?php else: ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->widget(DateControl::className(), [
                'language' => 'en',
                'type' => DateControl::FORMAT_DATE
            ]);?>

    <?= $form->field($model, 'time_start')->widget(DateControl::className(), [
            'language' => 'en',
            'type' => DateControl::FORMAT_TIME,
    ]); ?>

    <?= $form->field($model, 'time_end')->widget(DateControl::className(), [
        'language' => 'en',
        'type' => DateControl::FORMAT_TIME
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Обновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php endif; ?>
</div>
