<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex()
    {
        return "Hello World";
    }

    public function actionView($id)
    {
        return "Hello " . ($id ?: "world"); 
    }
}
