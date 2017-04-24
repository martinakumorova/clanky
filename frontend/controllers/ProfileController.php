<?php

namespace frontend\controllers;

use Yii;
use common\models\Ambulance;
use common\models\AmbulanceSearch;
use common\models\Term;
use common\models\TermSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class ProfileController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $myTerms = $this->findMyTerms();
        $searchModel = new TermSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'myTerms' => $myTerms, //todo dokonci
        ]);
    }

    public function actionCancelOrder($id_term)
    {
        $model = $this->findModel($id_term);
        $model->user_id_user = null;
        $model->save();

        return $this->redirect(['profile/index']);

    }

    protected function findModel($id_term)
    {
        if (($model = Term::findOne(['id_term' => $id_term]))) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    protected function findMyTerms()
    {
        if (($model = Term::findAll(['user_id_user' => Yii::$app->getUser()->getId()]))) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
