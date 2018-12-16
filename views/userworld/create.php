<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userworld */

$this->title = 'Create Userworld';
$this->params['breadcrumbs'][] = ['label' => 'Userworlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userworld-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'foreignworlds' => $foreignworlds,
    ]) ?>

</div>
