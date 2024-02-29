<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
       $auth = Yii::$app->authManager;
       $admin = $auth->createRole('admin');
       $supervisor = $auth->createRole('supervisor');
       $operador = $auth->createRole('operador');

       $auth->add($admin);
       $auth->add($supervisor);
       $auth->add($operador);

       $viewPost = $auth->createPermission('post-index');
       $addPost = $auth->createPermission('post-create');
       $editPost = $auth->createPermission('post-update');
       $deletePost = $auth->createPermission('post-delete');

        $auth->add($viewPost);
        $auth->add($addPost);
        $auth->add($editPost);
        $auth->add($deletePost);

        $auth->addChild($admin, $viewPost);
        $auth->addChild($admin, $addPost);
        $auth->addChild($admin, $editPost);
        $auth->addChild($admin, $deletePost);

        $auth->addChild($supervisor, $viewPost);
        $auth->addChild($supervisor, $addPost);
        $auth->addChild($supervisor, $editPost);
        
        $auth->addChild($operador, $viewPost);

        $auth->assign($admin, 1);
        $auth->assign($supervisor, 2);
        $auth->assign($operador, 3);

    }

    public function actionGetAccess($user_id)
    {


        $auth = Yii::$app->authManager;

        // check if loged user has permision
        //Yii::$app->user->can('post-index');


        echo "

        <p>user: $user_id</p>
        <p>post-index: {$auth->checkAccess($user_id, 'post-index')}</p>
        <p>post-create: {$auth->checkAccess($user_id, 'post-create')}</p>
        <p>post-update: {$auth->checkAccess($user_id, 'post-update')}</p>
        <p>post-delete: {$auth->checkAccess($user_id, 'post-delete')}</p>
        ";

        die;
    }
}