<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class ZixunController extends Controller{
        //网站公告
        public function actionIndex(){
		return $this->renderPartial('wzgg');
	}
        //网站简介
        public function actionWzjj(){
		return $this->renderPartial('wzjj');
	}
        //文章管理
        public function actionWzgl(){
		return $this->renderPartial('wzgl');
	}
        //文章分类
        public function actionWzfl(){
		return $this->renderPartial('wzfl');
	}
        //帮助分类
        public function actionBzfl(){
		return $this->renderPartial('bzfl');
	}
        //帮助管理
        public function actionBzgl(){
		return $this->renderPartial('bzgl');
	}
        //案例管理
        public function actionAlgl(){
		return $this->renderPartial('algl');
	}
        
}
?>
