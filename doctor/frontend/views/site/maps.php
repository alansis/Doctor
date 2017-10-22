<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21.10.2017
 * Time: 15:26
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$from = "Lviv" . "+" . "Ukraine";
$to = "Sambir" . "+" . "Ukraine"
?>


<iframe
    src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDkrq6QODGwYjZpVdEy7mZWOidHEQzk7ls
    &origin=<?= $from?>&destination=<?= $to ?>&&avoid=tolls|highways"
    width="1000"
    height="600"
</iframe>

