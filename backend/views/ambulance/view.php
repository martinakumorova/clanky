<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Ambulance */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ambulances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambulance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ambulance',
            'name',
            'doctor',
            'info:ntext',
        ],
    ]) ?>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-7 col-lg-offset-2">
                <p> <h4><?php echo "Termíny"; ?></h4></p>
            </div>

            <div class="col-lg-7 col-lg-offset-2">
                <table id="data-table" class="table table-striped table-bordered">
                    <tbody>
                    <th></th>
                    <th><?php echo "Dátum a čas";?></th>
                    <th><?php echo "Prihlásený";?></th>
                    <th><?php echo "";?></th>
                    <?php foreach($model->terms AS $term){?>
                        <tr>

                            <td><?php echo $term->id_term;?></td>
                            <td><?php echo $term->date_time;?></td>
                            <td><?php echo $term->user_id_user;//todo zavolaj username userIdUser->username neslo - potrebujem sa dostat z amb do user cez term?></td>
                            <td>
                                <?= Html::a('Delete', ['term/delete', 'id_term'=> $term->id_term,'ambulance_id_ambulance'=> $model->id_ambulance], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',],]) ?>

                                <?= Html::a('Update', ['term/update', 'id_term'=> $term->id_term,'ambulance_id_ambulance'=> $model->id_ambulance], [
                                    'class' => 'btn btn-primary'])?>
                            </td>

                        </tr>
                    <?php }?>

                </table>
            </div>
        </div>
    </div>
</div>
