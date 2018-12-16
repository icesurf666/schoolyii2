<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usertask */

$this->title = 'Create Usertask';
$this->params['breadcrumbs'][] = ['label' => 'Usertasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usertask-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'tasks' => $tasks,
    ]) ?>

</div>
