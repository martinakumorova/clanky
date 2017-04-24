<?php

namespace backend\controllers;

use Yii;
use common\models\Term;
use common\models\TermSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TermController implements the CRUD actions for Term model.
 */
class TermController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Term models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TermSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Term model.
     * @param integer $id_term
     * @param integer $user_id_user
     * @param integer $ambulance_id_ambulance
     * @return mixed
     */
    public function actionView($id_term, $user_id_user, $ambulance_id_ambulance)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_term, $user_id_user, $ambulance_id_ambulance),
        ]);
    }

    /**
     * Creates a new Term model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Term();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_term' => $model->id_term, 'user_id_user' => $model->user_id_user, 'ambulance_id_ambulance' => $model->ambulance_id_ambulance]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Term model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_term
     * @param integer $user_id_user
     * @param integer $ambulance_id_ambulance
     * @return mixed
     */
    public function actionUpdate($id_term, $ambulance_id_ambulance)
    {
        $model = $this->findModel($id_term);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['ambulance/view', 'id' => $ambulance_id_ambulance]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Term model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_term
     * @param integer $user_id_user
     * @param integer $ambulance_id_ambulance
     * @return mixed
     */
    public function actionDelete($id_term,  $ambulance_id_ambulance)
    {
        $this->findModel($id_term)->delete();

        return $this->redirect(['ambulance/view','id' => $ambulance_id_ambulance]);
    }

    /**
     * Finds the Term model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_term
     * @param integer $user_id_user
     * @param integer $ambulance_id_ambulance
     * @return Term the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_term)
    {
        if (($model = Term::findOne(['id_term' => $id_term]))) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
