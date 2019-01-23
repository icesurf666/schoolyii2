<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupworldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Groupworlds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupworld-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (\Yii::$app->user->can('teacher')): ?>
        <p>
            <?= Html::a('Create groupworld', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'level',

             ['class' => 'yii\grid\ActionColumn',
                'visible' => \Yii::$app->user->can('teacher')],

        ],
    ]); ?>
</div>
