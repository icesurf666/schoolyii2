<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Groupworld */

$this->title = 'Create Groupworld';
$this->params['breadcrumbs'][] = ['label' => 'Groupworlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupworld-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
