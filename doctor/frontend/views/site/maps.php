<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21.10.2017
 * Time: 15:26
 */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Карти';
$this->params['breadcrumbs'][] = $this->title;

$placemaps = \common\models\Placemaps::find()->asArray()->all();
$result = ArrayHelper::map($placemaps, 'id', 'name_of_setting');
?>

<div class="beforeMaps">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name_of_setting')->dropDownList($result) ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>



<div class="mapsframe">
<iframe
    src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDkrq6QODGwYjZpVdEy7mZWOidHEQzk7ls
    &origin=<?= $basePlase; ?>&destination=<?php if($_SERVER['REQUEST_METHOD'] == 'GET'){echo $basePlase;}else{echo $modelSelect->address;} ?>&&avoid=tolls|highways"
    width="100%"
    height="100%"
    align="center"
</iframe>

</div>

