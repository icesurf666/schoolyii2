<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userworld */

$this->title = 'Update Userworld: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Userworlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userworld-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'foreignworlds' => $foreignworlds,
    ]) ?>

</div>
