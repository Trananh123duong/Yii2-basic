<?php

namespace app\controllers;

use app\resource\Post;
use yii\rest\ActiveController;

class PostController extends ActiveController
{
    public $modelClass = Post::class;

    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }

}
