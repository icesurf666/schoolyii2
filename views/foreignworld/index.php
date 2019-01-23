<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ForeignworldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foreignworlds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foreignworld-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (\Yii::$app->user->can('teacher')): ?>
        <p>
            <?= Html::a('Create foreigword', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'translate',
            'sound',
            'picture',
            'id_russianworlds',
            //'id_languages',

            ['class' => 'yii\grid\ActionColumn',
                'visible' => \Yii::$app->user->can('teacher')],
        ],
    ]); ?>
</div>
