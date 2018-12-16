<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sentence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'translate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sound')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'true_answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'false_answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_languages')->dropDownList($languages) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
