<?php

namespace frontend\controllers;

class CaseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

}
