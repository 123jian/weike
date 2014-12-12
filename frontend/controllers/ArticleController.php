<?php

namespace frontend\controllers;

class ArticleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

}
