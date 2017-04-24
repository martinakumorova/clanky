<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TermSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="term-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_term') ?>

    <?= $form->field($model, 'date_time') ?>

    <?= $form->field($model, 'user_id_user') ?>

    <?= $form->field($model, 'ambulance_id_ambulance') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
