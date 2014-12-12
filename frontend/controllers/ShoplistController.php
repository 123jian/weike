<?php

namespace frontend\controllers;

class ShoplistController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

}
