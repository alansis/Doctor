<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model common\models\Schedule */

$this->title = 'Створити розклад';
$this->params['breadcrumbs'][] = ['label' => 'Розклад', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-create">
    <?= $this->render('_form', [
        'model' => $model,
        'url' => $model->id
    ]) ?>

</div>

