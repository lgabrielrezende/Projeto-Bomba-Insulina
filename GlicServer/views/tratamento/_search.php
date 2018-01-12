<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TratamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tratamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idade') ?>

    <?= $form->field($model, 'sexo') ?>

    <?= $form->field($model, 'altura') ?>

    <?= $form->field($model, 'medidor') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <?php // echo $form->field($model, 'historico_id') ?>

    <?php // echo $form->field($model, 'objideal') ?>

    <?php // echo $form->field($model, 'objmax') ?>

    <?php // echo $form->field($model, 'objmin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
