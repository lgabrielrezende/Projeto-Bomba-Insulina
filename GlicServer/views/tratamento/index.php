<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TratamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tratamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tratamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tratamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idade',
            'sexo',
            'altura',
            'medidor',
            // 'usuario_id',
            // 'historico_id',
            // 'objideal',
            // 'objmax',
            // 'objmin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
