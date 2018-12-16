<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ForeignworldSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foreignworld-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'translate') ?>

    <?= $form->field($model, 'sound') ?>

    <?= $form->field($model, 'picture') ?>

    <?= $form->field($model, 'id_russianworlds') ?>

    <?php // echo $form->field($model, 'id_languages') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
