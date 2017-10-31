<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = 'Обновити: ' . $model->title ;
$this->params['breadcrumbs'][] = ['label' => 'Відділення', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
