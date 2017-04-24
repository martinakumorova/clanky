<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Term */

$this->title = $model->id_term;
$this->params['breadcrumbs'][] = ['label' => 'Terms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_term' => $model->id_term, 'user_id_user' => $model->user_id_user, 'ambulance_id_ambulance' => $model->ambulance_id_ambulance], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_term' => $model->id_term, 'user_id_user' => $model->user_id_user, 'ambulance_id_ambulance' => $model->ambulance_id_ambulance], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_term',
            'date_time',
            'user_id_user',
            'ambulance_id_ambulance',
        ],
    ]) ?>

</div>
