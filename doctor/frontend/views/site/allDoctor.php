<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21.10.2017
 * Time: 0:32
 */



/* @var $this yii\web\View */
/* @var $model frontend\controllers\SiteController */

use yii\helpers\Html;

$this->title = 'Лікарі';
$this->params['breadcrumbs'][] = $this->title;
?>

<pre>
    <?php var_dump($model) ?>
    <?php var_dump($model->getDepartment()) ?>
</pre>
