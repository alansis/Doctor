<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Workers */
/* @var $form yii\widgets\ActiveForm */

$department = \common\models\Department::find()->asArray()->all();
$result = ArrayHelper::map($department, 'id', 'title');
?>

<div class="workers-form">

    <?php $form = ActiveForm::begin(); ?>


    <?=
    $form->field($model, 'department_id')->dropDownList($result, ['options' => ['disabled' => true]])?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Passport_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Specialization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Обновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
