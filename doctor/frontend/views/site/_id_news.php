<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31.10.2017
 * Time: 22:22
 */

use yii\bootstrap\Button;
use yii\helpers\Html;

?>
<div id="title" align="center">
    <?= '<h1>' . $model->title . '</h1>' ?>
</div>
<?= $model->content; ?>

<?= Html::a('Подробніше', ['site/news-one', 'id' => $model->id], ['class'=>'btn btn-primary']) ?>
