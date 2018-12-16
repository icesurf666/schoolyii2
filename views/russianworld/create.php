<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Russianworld */

$this->title = 'Create Russianworld';
$this->params['breadcrumbs'][] = ['label' => 'Russianworlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="russianworld-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'groupworlds' => $groupworlds,
    ]) ?>

</div>
