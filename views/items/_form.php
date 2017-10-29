<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'inventory_number')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>
    <? $workers = \app\models\Worker::find()->all();?>
    <? $items = ArrayHelper::map($workers, 'id', 'fio');?>
    <?= $form->field($model, 'responsible_id')->dropDownList($items,  ['prompt' => 'Выберите работника...']); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
