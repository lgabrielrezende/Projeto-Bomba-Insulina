<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Insulina */

$this->title = 'Create Insulina';
$this->params['breadcrumbs'][] = ['label' => 'Insulinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insulina-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
