<?php

namespace app\controllers;

use Yii;
use app\models\Partner;
use app\models\UploadForm;
use app\models\PartnerSearch;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PartnerController implements the CRUD actions for Partner model.
 */
class PartnerController extends Controller
{
	public $layout = 'main2';
	
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        	'access' => [
        		'class' => AccessControl::className(),
        		'denyCallback' => function ($rule, $action) {
        			return Yii::$app->getResponse()->redirect('/backend/login');
        		},
        		'rules' => [
        			[
        				'allow' => true,
        				'actions' => ['index', 'view', 'create', 'update', 'delete'],
        				'roles' => ['@'],
        			],
        		]
        	]
        ];
    }

    /**
     * Lists all Partner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PartnerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Partner model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Partner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Partner();
        $form = new UploadForm();

        if ($model->load(Yii::$app->request->post())) {
			if ($form->image = UploadedFile::getInstance($form, 'image')) {
				$model->pic = 'image/' . md5($_SERVER['REQUEST_TIME']. $form->image->baseName) . $_SERVER['REQUEST_TIME'] . '.' . $form->image->extension;
				$form->image->saveAs($model->pic);
				$model->save();
	        	return $this->redirect(['view', 'id' => $model->id]);
			} else {
				$form->addError('image', '图片不可为空');
			}
		}
		return $this->render('create', [
				'model' => $model,
				'uploadForm' => $form
		]);
    }

    /**
     * Updates an existing Partner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $form = new UploadForm();
        
    	if ($model->load(Yii::$app->request->post())) {
        	if ($form->image = UploadedFile::getInstance($form, 'image')) {
        		$model->pic = 'image/' . md5($_SERVER['REQUEST_TIME']. $form->image->baseName) . $_SERVER['REQUEST_TIME'] . '.' . $form->image->extension;
        		$form->image->saveAs($model->pic);
        	}
        	$model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            	'uploadForm' => $form
            ]);
        }
    }

    /**
     * Deletes an existing Partner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Partner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Partner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Partner::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
