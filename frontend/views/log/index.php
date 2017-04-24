<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-index">

    <?php
    //$matches=null;
        //foreach($dataProvider->models AS $data)
        //{
            //$pattern = "/(.*)\n.*$/"; //"/[^:]*in[^S]*/"; // $pat="/^.*in.*$/m"; (.*)\n.*$
            //preg_match($pattern, $data->message, $matches);
            //print_r($matches);
            //echo "<br>";
            // $myMessage = $matches;
            // var_dump($myMessage);echo "<br>";

            //$data->message = $matches[0]; //toto ptm sa dalo vypisat ako ***


        //} //toto nemusím robit tu atribút môžem ovp. aj vo widgete-colum ako je to dolu


    ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'level',
            'category',
            'log_time:datetime',
            //'prefix:ntext',
            //'message:ntext', ***
             [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'message', //ktorý atribút chcem upraviť
                'value' => function($model) {
                    $pattern = "/(.*)/";  //"/[^S]*/";
                    preg_match($pattern, $model->message, $matches);
                        return $matches[0];
                    },
                'format' => 'raw'
            ],
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'message', //ktorý atribút chcem upraviť
                'label' => 'Place',
                'value' => function($model) {
                    $pattern = "/(.*)\n.*$/";
                    preg_match($pattern, $model->message, $matches);

                    if(preg_match("/frontend/",$model->message))
                    {
                        return "frontend";
                    }
                    else if(preg_match("/backend/",$model->message)) {
                        return "backend";
                    }
                    else return "common";
                    },
                'format' => 'raw'
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    

                        
</div>
