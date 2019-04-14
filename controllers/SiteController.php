<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Category;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Article;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
         $recent = Article::getRecent();

        return $this->render('index', [
            'recent'=>$recent,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    /**
     * Displays blog page.
     *
     * @return string
     */
    public function actionBlog()
    {
        $data = Article::getAll(9);
        $categories = Category::getAll();
        
        return $this->render('blog', [
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'categories'=>$categories
        ]);
    }
    
    public function actionBlog_view($id)
    {
        $article = Article::findOne($id);
        $popular = Article::getPopular();
        $categories = Category::getAll();
        
        return $this->render('blog-single', [
            'article'=>$article,
            'popular' => $popular,
            'categories' => $categories,
        ]);
    }
            
    /**
     * Displays albums page.
     *
     * @return string
     */
    public function actionAlbums()
    {
        return $this->render('albums');
    }
    public function actionCategory($id)
    {
        $data = Category::getArticlesByCategory($id);
       $category = Category::findOne($id);
        return $this->render('category', [
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
         'category' => $category,
            ]);
    }
}
