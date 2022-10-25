<?php

namespace app\controllers;
namespace app\modules\medical\controllers;

use Yii;
use app\models\Registration;
use app\models\RegistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegistrationController implements the CRUD actions for Registration model.
 */
class DiagnosariController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Registration models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RegistrationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->get(), false, Registration::Active);
        //(Yii::$app->request->queryParams);
        //(Yii::$params, $is_inpatient, $regstatus);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
