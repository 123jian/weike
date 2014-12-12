<?php

namespace frontend\controllers;

class HellpController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //$this->layout='@app/views/layouts/header.php';
        return $this->renderpartial('index');
    }

}
