<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usertask */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usertask-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'know')->textInput() ?>

    <?= $form->field($model, 'id_tasks')->dropDownList($tasks) ?>

    <?= $form->field($model, 'id_user')->dropDownList($user) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
