<?php

namespace app\models;

$this->title = 'АТБ';


?>
<div class="site-index">

    <div class="jumbotron">

        <p class="lead" >Изображения самолетов
            <a href="https://ru.wikipedia.org/wiki/%D0%93%D1%80%D0%B0%D0%B6%D0%B4%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%B0%D0%B2%D0%B8%D0%B0%D1%86%D0%B8%D1%8F">гражданской авиации</a>
            .
        </p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4" align='center'>

                <p><? echo image::getImage(rand(0, 2)); ?></p>

            </div>
            <div class="col-lg-4" align='center'>

                <p><? echo image::getImage(rand(3, 5)); ?></p>

            </div>

            <div class="col-lg-4" align='center'>

                <p><? echo image::getImage(rand(6, 8)); ?></p>

            </div>
        </div>

    </div>
</div>

<?php
$arr = array(
            "first" => ["name" => "Ivan", "age" => "23", "country" => "Russia"],
            "second" => ["name" => "Oleg", "age" => "33", "country" => "Ukrain"],
            "thirt" => ["name" => "Vlad", "age" => "13", "country" => "Poland"]
);
echo $arr["thirt"]["name"];
echo "<br>";
echo $arr["first"]["age"];
echo "<br>";
echo $arr["second"]["country"];

