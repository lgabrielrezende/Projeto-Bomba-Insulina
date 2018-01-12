<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GlicemiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Glicemias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glicemia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Glicemia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipo',
            'quantidade',
            'objetivo',
            'horario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
