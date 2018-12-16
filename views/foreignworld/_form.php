<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Foreignworld */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foreignworld-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'translate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sound')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_russianworlds')->dropDownList($russianworlds) ?>

    <?= $form->field($model, 'id_languages')->dropDownList($languages) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
