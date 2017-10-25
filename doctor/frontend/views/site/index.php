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
                        'caption' => '<h2>Yii Gii</h2><p>Удобный встроенный генератор кода. Модули, модели на основе таблиц в БД и, конечно же, CRUD</p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img style="width:1200px;height:296px" src="../../../../doctor/public_html/upload/img_for_slader/mountains1.jpg"/>',
                        'caption' => '<h2>Отличный отладчик</h2><p>Легко подключается, помнит все запросы http, БД и логи</p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img style="width:1200px;height:296px" src="../../../../doctor/public_html/upload/img_for_slader/werwer.jpg"/>',
                        'caption' => '<h2>Быстрый старт</h2><p>Установка и обновление через composer</p>',
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

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
