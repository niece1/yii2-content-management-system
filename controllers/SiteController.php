<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Category;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use app\models\Article;
use app\models\Tag;
use app\models\CommentForm;
use app\models\User;
use yii\web\Cookie;

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
        $comments = $article->getArticleComments();
        $commentForm = new CommentForm();
        $article->viewedCounter();
        $tags = Tag::getAllTags();
        return $this->render('blog-single', [
            'article' => $article,
            'popular' => $popular,
            'categories' => $categories,
            'comments' => $comments,
            'commentForm' => $commentForm,
            'tags' => $tags
        ]);
    }
    
     public function actionComment($id)
    {
        $model = new CommentForm();
        
        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            $model->saveComment($id);
            return $this->redirect(['site/blog_view', 'id'=>$id]);
        }
        
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
    public function actionTag($id)
    {
        $data = Tag::getArticlesByTag($id);
        $tags = Tag::findOne($id);
     //  var_dump($articles);die;
        return $this->render('tag', [
             'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
             'tags' => $tags,
            ]);
    }
    public function actionAuthor($id)
    {
        $data = User::getArticlesByUser($id);
        $user = User::findOne($id);
     //  var_dump($articles);die;
        return $this->render('author', [
             'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
             'user' => $user,
            ]);
    }
    public function actionLanguage()
    {
        $language = Yii::$app->request->post('language');
        Yii::$app->language = $language;
        
        $languageCookie = new Cookie([
            'name' => 'language',
            'value' => $language,
            'expire' => time() + 60 * 60 * 24 * 30, // 30 days
        ]);
        Yii::$app->response->cookies->add($languageCookie);
        return $this->redirect(Yii::$app->request->referrer);
    }

}
