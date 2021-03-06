<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coverage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coverage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'benefit_id')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'val')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
