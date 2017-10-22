<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Callfordoctor */
/* @var $form ActiveForm */
?>
<div class="site-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'subname') ?>
        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'number') ?>
        <?= $form->field($model, 'problem') ?>
        <?= $form->field($model, 'date') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-form -->
