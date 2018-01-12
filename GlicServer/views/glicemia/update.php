<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Glicemia */

$this->title = 'Update Glicemia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Glicemias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="glicemia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
