<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Termíny';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="term-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Term', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Term', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_term',
            'date_time',
            'user_id_user',
            'ambulance_id_ambulance',

            ['class' => 'yii\grid\ActionColumn',
                'template' => ' {view} {cancelOrderButton}',
                'buttons'=>[
                    'cancelOrderButton'=>function($model){
                         return Html::a('', ['profile/cancel-order', ], //'id'=>$model->id_term
                             ['class' => 'glyphicon glyphicon-remove',
                                 'data' => [
                                 'confirm' => 'Chcete sa odhlásiť?',
                                 'method' => 'post',],],
                             ['label'=> 'Odhlás sa']); //todo oprav - dopln id_term pre odhlasenie termínu

                }]
            ],

        ],
    ]); ?>
    <?php print_r($myTerms);?>
</div>
