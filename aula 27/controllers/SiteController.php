<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\models\Cliente;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\filters\VerbFilter;
use yii\helpers\StringHelper;
use yii\filters\AccessControl;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
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
        return $this->render('index');
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
    
    public function actionHome()
    {
        $this->layout = 'site';

        return $this->render('home');
    }

    public function actionStringHelper()
    {
        dd(
            StringHelper::startsWith('Yii teste', 'yii', false),// começa com ...
            StringHelper::endsWith('nome aa', 'aa'),// termina com ...
            StringHelper::countWords('Hecton aparecido gonaçalves'),
            StringHelper::truncate('teste de envio', 5, '(...)'),
            StringHelper::truncateWords('hecton aparecido goncalves', 2, ' ...')


        );


        return $this->render('layout');
    }

    public function actionBehaviors()
    {
        $client = new Cliente();
        $client->nome = 'hecton aparecido gonalves';


        // dd($client->nome);

        dd(
            $client->save(),
            $client->getErrors(),
        );


        dd($client);

    }


    public function actionAliases()
    {
        dd(
            Yii::getAlias('@cssPath'),
            // Yii::getAlias('@cssUrl'),
        );
    }
}
