<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Callfordoctor */
/* @var $form ActiveForm */


?>
<div class="form_for_call_doctor">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Name')
            ->textInput(['placeholder' => 'Ваше имя', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'Subname')
            ->textInput(['placeholder' => 'Ваше прізвище', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'Surname')
            ->textInput(['placeholder' => 'Ваш побатькові', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'Street')
            ->textInput(['placeholder' => 'Введіть вулицю де ви проживаєте', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'Bilding')
            ->textInput(['placeholder' => 'Номер будинку', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'MobilePhone')
            ->textInput(['placeholder' => 'Номер мобільного телефону', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'HomePhone')
            ->textInput(['placeholder' => 'Домашній номер телефону, заповненн не обовязкове', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'apartment')->textInput(['placeholder' => 'Номер квартири, що у вас приватний будинок введіть 0', 'class' =>'form-control text-left']) ?>
        <?= $form->field($model, 'Passport_id')->textInput(['placeholder' => 'Введіть серію, та номер паспорта наприклад НЮ11003', 'class' =>'form-control text-left']); ?>
        <?= $form->field($model, 'Description')->textarea(['placeholder' => 'Опишіть що саме вас непокоїть',
            'class' =>'form-control text-left', 'rows' => '6']) ?>


        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- form_for_call_doctor -->
