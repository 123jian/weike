<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
class ShangdianController extends Controller{
        //管理首页
        public function actionIndex(){
		return $this->renderPartial('glsy');
	}
        //作品订单管理
        public function actionZpddgl(){
		return $this->renderPartial('zpddgl');
	}
        //作品管理
        public function actionZpgl(){
		return $this->renderPartial('zpgl');
	}
        //作品配置
        public function actionZppz(){
		return $this->renderPartial('zppz');
	}
        //服务订单管理
        public function actionFwddgl(){
		return $this->renderPartial('fwddgl');
	}
        //服务管理
        public function actionFwgl(){
		return $this->renderPartial('fwgl');
	}
        //服务配置
        public function actionFwpz(){
		return $this->renderPartial('fwpz');
	}
}

?>
