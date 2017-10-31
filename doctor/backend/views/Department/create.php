<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = 'Створити відділення';
$this->params['breadcrumbs'][] = ['label' => 'Відділення', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
