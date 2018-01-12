<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tratamento */

$this->title = 'Create Tratamento';
$this->params['breadcrumbs'][] = ['label' => 'Tratamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tratamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
