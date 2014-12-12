<?php

namespace frontend\controllers;

class TasklistController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/header.php';
        return $this->render('index');
    }

}
