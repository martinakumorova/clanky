<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Term */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="term-form">

    <?php $form = ActiveForm::begin(); ?>


   <?php  echo $form->field($model, 'date_time')->widget(DateTimePicker::classname(), [
    'options' => ['placeholder' => ''],
    'language'=>'sk',
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'mm/dd/yyyy hh:ii:ss',
    ]
    ]);?>


    <?php //$form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'user_id_user')->textInput() ?>

    <?= $form->field($model, 'ambulance_id_ambulance')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
