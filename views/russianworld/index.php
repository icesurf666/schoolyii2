<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RussianworldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Russianworlds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="russianworld-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Russianworld', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'world',
            'image',
            'level_high',
            'id_groupworlds',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
