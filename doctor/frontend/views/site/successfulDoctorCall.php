<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 19.10.2017
 * Time: 0:10
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<div class="successfulDoctorCall">

    <?php
        echo '<h2>' ."Шановний ". '</h2>';
        echo '<h3>' . $model->Subname . ' ' . $model->Name . '</h3>' . '<br>' . 'З вами звяжуться ближчим часом';

        // return Yii::$app->response->redirect(Url::to('index'));
    ?>



</div>