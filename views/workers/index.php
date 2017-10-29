<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Workers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Worker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fio',
            'room',
            'position',
            'chief.fio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
