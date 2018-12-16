<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Russianworld */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="russianworld-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'world')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level_high')->textInput() ?>

    <?= $form->field($model, 'id_groupworlds')->dropDownList($groupworlds) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
