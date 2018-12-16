<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userworld */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userworld-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isknow')->textInput() ?>

    <?= $form->field($model, 'id_foreignworlds')->dropDownList($foreignworlds) ?>

    <?= $form->field($model, 'id_user')->dropDownList($user) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
