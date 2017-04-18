<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Post', ['value'=>Url::to(['/post/create']),'class' => 'btn btn-success','id'=>'modalButton']) ?>

   
    </p>
    
    <?php
    Modal::begin([
       'header'=> '<h4>Create post</h4>',
        'id'=> 'modal',
        'size'=>'modal-lg',
    ]);
    
    echo "<div id='modalContent'></div>";
    Modal::end();
    
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_post',
            'title',
            'date:datetime',
            [
                'attribute'=>'id_user',
                'value'=>'idUser.username',
            ],
          

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
