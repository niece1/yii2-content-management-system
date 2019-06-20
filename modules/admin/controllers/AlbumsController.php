<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Albums;
use app\models\AlbumsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ImageUpload;
use yii\web\UploadedFile;

/**
 * AlbumsController implements the CRUD actions for Albums model.
 */
class AlbumsController extends Controller
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
     * Lists all Albums models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlbumsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Albums model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Albums model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Albums();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Albums model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Albums model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Albums model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Albums the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Albums::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionSetImage($id)
    {
        $model = new ImageUpload;
     //   die('Page not found');
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage($model->uploadFile($file, $albums->image_main)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage01($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage01($model->uploadFile($file, $albums->image_01)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage02($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage02($model->uploadFile($file, $albums->image_02)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage03($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage03($model->uploadFile($file, $albums->image_03)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage04($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage04($model->uploadFile($file, $albums->image_04)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage05($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage05($model->uploadFile($file, $albums->image_05)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage06($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage06($model->uploadFile($file, $albums->image_06)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage07($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage07($model->uploadFile($file, $albums->image_07)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage08($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage08($model->uploadFile($file, $albums->image_08)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage09($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage09($model->uploadFile($file, $albums->image_09)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage10($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage10($model->uploadFile($file, $albums->image_10)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage11($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage11($model->uploadFile($file, $albums->image_11)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage12($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage12($model->uploadFile($file, $albums->image_12)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage13($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage13($model->uploadFile($file, $albums->image_13)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage14($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage14($model->uploadFile($file, $albums->image_14)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage15($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage15($model->uploadFile($file, $albums->image_15)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage16($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage16($model->uploadFile($file, $albums->image_16)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage17($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage17($model->uploadFile($file, $albums->image_17)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage18($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage18($model->uploadFile($file, $albums->image_18)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage19($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage19($model->uploadFile($file, $albums->image_19)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage20($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage20($model->uploadFile($file, $albums->image_20)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
    public function actionSetImage21($id)
    {
        $model = new ImageUpload;
        if (Yii::$app->request->isPost)
        {
            $albums = $this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');
            if($albums->saveImage21($model->uploadFile($file, $albums->image_21)))
            {
                return $this->redirect(['view', 'id'=>$albums->id]);
            }
        }
        return $this->render('/article/image', ['model'=>$model]);
    }
}
