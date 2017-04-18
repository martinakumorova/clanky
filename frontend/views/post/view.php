<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title; toto mi prenesie nazov 
?>
<div class="post-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_post',
            'date:datetime',
            'idUser.username',
        ],
    ]) ?>
    
    <div class="body-content">
        <div class="row">
            <div class="col-lg-7 col-lg-offset-2">
                
                <p> <h1><?= Html::encode($this->title); ?></h1></p>
                    <p><?= $model->text;?></p>
                <p class="col-lg-7 col-lg-offset-2">
                    <?= Html::a('Add comment', ['comment/create', 'id' => $model->id_post,'id_comment'=> '0'], ['class' => 'btn btn-success']) ?>
                </p>
            
            </div>
            
            <div class="col-lg-7 col-lg-offset-2">
               
                <table id="data-table" class="table table-striped table-bordered">
                    <tbody>
                        <?php foreach($model->comments AS $comment):?>
                        <tr>
                            <?php if($comment->reply_id_coment==null):?>
                                    <td><?php echo $comment->id_user;?></td>
                                    <td><?php echo $comment->comment;?></td>
                                    <td><?php echo $comment->date;?></td>
                                    <td>
                                         <?= Html::a('Reply', ['comment/create', 'id' => $model->id_post, 'id_comment'=> $comment->id_comment], ['class' => 'btn btn-primary']) ?>
                                    </td>
                            <?php endif;?>
                        </tr>
                        
                            <?php foreach($comment->comments AS $answer):?>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $answer->comment;?></td>
                                    <td><?php echo $answer->date;?></td>
                    </tbody>
                            <?php  endforeach;             
                                   endforeach;?>
                  
                </table>  
            </div>
        </div>
    </div>
  

</div>
