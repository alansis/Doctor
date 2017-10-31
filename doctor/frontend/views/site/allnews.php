<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31.10.2017
 * Time: 20:23
 */
use yii\widgets\ListView;

use yii\helpers\HtmlPurifier;
?>


<?= ListView::widget([
    'dataProvider' => $listDataProvider,
    'itemView' => '_Id_news',
]); ?>

