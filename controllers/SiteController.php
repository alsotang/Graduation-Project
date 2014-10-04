<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Process;
use app\models\Post;

class SiteController extends Controller
{
    public $layout = 'main';

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    public function actionIndex()
    {
        $post_list = Post::find()->orderBy(['created' => SORT_DESC])->limit(10)->all();

        return $this->render('/site/index', ['post_list' => $post_list]);
    }

    public function actionArticle()
    {
        return $this->render('/site/article');
    }

    public function actionInfo(){
        return $this->render('/site/info');
    }

    public function actionPost(){
        return $this->render('/site/post');
    }

    public function actionCollection(){
        return $this->render('/site/collection');
    }

    public function actionPass()
    {
        dump(md5(md5('inno')));
    }

    // public function actionCalColumn()
    // {
    //     dump(sprintf("%.8f", 80.0 / 1200));
    //     dump(sprintf("%.8f", 160.0 / 1200));
    //     dump(sprintf("%.8f", 240.0 / 1200));
    //     dump(sprintf("%.8f", 320.0 / 1200));
    //     dump(sprintf("%.8f", 400.0 / 1200));
    //     dump(sprintf("%.8f", 480.0 / 1200));
    //     dump(sprintf("%.8f", 560.0 / 1200));
    //     dump(sprintf("%.8f", 640.0 / 1200));
    //     dump(sprintf("%.8f", 720.0 / 1200));
    //     dump(sprintf("%.8f", 800.0 / 1200));
    //     dump(sprintf("%.8f", 880.0 / 1200));
    //     dump(sprintf("%.8f", 960.0 / 1200));
    //     dump(sprintf("%.8f", 1040.0 / 1200));
    //     dump(sprintf("%.8f", 1120.0 / 1200));
    //     dump(sprintf("%.8f", 1200.0 / 1200));
    //     die();
    // }

}
