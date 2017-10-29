<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'АТБ';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>КК НАУ - АТБ!</h1>

        <p class="lead">Добро пожаловать!</p>

        <p><a class="btn btn-lg btn-success" href="http://kk.nau.edu.ua/">Официальный сайт</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Прибористы</h2>

                <p><? echo "<img src='http://erundit.ru/avatar/200/083.jpg'>";?></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Радисты</h2>

                <p><? echo "<img src='http://erundit.ru/avatar/200/078.jpg'>";?></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <h2>Механики</h2>

                <p><? echo "<img src='http://erundit.ru/avatar/200/075.jpg'>";?></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
