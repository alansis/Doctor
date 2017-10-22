<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Subname') ?>

    <?= $form->field($model, 'Surname') ?>

    <?php // echo $form->field($model, 'Passport_id') ?>

    <?php // echo $form->field($model, 'Specialization') ?>

    <?php // echo $form->field($model, 'Position') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
