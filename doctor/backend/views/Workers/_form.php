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

    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($user, 'department_id')->dropDownList($result, ['options' => ['disabled' => true]])?>

    <?= $form->field($user, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'Subname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'Surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'Passport_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'Specialization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'Position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? 'Створити' : 'Обновити', ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
