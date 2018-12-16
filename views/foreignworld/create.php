<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Foreignworld */

$this->title = 'Create Foreignworld';
$this->params['breadcrumbs'][] = ['label' => 'Foreignworlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foreignworld-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'languages' => $languages,
        'russianworlds' => $russianworlds,
    ]) ?>

</div>
