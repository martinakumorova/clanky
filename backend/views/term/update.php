<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Term */

$this->title = 'Update Term: ' . $model->id_term;
$this->params['breadcrumbs'][] = ['label' => 'Terms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_term, 'url' => ['view', 'id_term' => $model->id_term, 'user_id_user' => $model->user_id_user, 'ambulance_id_ambulance' => $model->ambulance_id_ambulance]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="term-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
