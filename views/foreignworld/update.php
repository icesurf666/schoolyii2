<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Foreignworld */

$this->title = 'Update Foreignworld: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Foreignworlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foreignworld-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'languages' => $languages,
        'russianworlds' => $russianworlds,
    ]) ?>

</div>
