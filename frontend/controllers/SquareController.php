<?php

namespace frontend\controllers;

class SquareController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        return $this->renderpartial('index');
    }

}
