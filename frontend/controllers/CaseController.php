<?php

namespace frontend\controllers;
use app\models\KekeWitkeyCase;
class CaseController extends \yii\web\Controller
{
    public function actionIndex()
    {
       $arr = KekeWitkeyCase::find()->all(); 
        return $this->renderpartial('index',['arr'=>$arr]);
    }
    public function actionSelect()
    {
       $arr = KekeWitkeyCase::find()->where(['case_id' => $_GET['sid']])->all(); 
        return $this->renderpartial('select',['arr'=>$arr]);
    }

}
