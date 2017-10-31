<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31.10.2017
 * Time: 20:59
 */

use yii\helpers\Html;

?>

<div class="content">
    <div id="title">
        <?= '<h1>' . $news->title . '</h1>' ?>
    </div>
    <div id="content">
        <?= $news->content ?>
        <br>
    </div>
    <div id="author">
        <?= $news->author ?>
        <br>
    </div>

</div>

