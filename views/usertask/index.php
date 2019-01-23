<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsertaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usertasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usertask-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (\Yii::$app->user->can('student')): ?>
        <p>
            <?= Html::a('Create usertask', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'know',
            'id_tasks',
            'id_user',

            ['class' => 'yii\grid\ActionColumn',
                'visible' => \Yii::$app->user->can('student')],
        ],
    ]); ?>
</div>
