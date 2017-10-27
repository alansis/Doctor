<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\bootstrap\Carousel;
?>
<div class="site-index">


    <div class="body-content">

        <div class="Carousel">
            <?php
            echo Carousel::widget ( [
                'items' => [
                    [
                        'content' => '<img style="width:1200px;height:296px" src="../../../../doctor/public_html/upload/img_for_slader/01.jpg"/>',
                        'caption' => '<h2>Національний проект</h2><p> Програма доступні ліки </p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img style="width:1200px;height:296px" src="../../../../doctor/public_html/upload/img_for_slader/mountains1.jpg"/>',
                        'caption' => '<h2>#</h2><p>Департамент медичної державної допомоги</p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img style="width:1200px;height:296px" src="../../../../doctor/public_html/upload/img_for_slader/werwer.jpg"/>',
                        'caption' => '<h2>#</h2><p>Допомога онкохворим</p>',
                        'options' => []
                    ]
                ],
                'options' => [
                    'style' => 'width:auto;' // Задаем ширину контейнера
                ]
            ]);
            ?>
        </div>


        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>


                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>



                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>



                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
