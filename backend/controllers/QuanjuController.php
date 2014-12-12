<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class QuanjuController extends Controller{
	public function actionIndex(){
		return $this->renderPartial('index');
	}
        public function actionMxgl(){
		return $this->renderPartial('mxgl');
	}
	public function actionHyzh(){
		return $this->renderPartial('hyzh');
	}
	public function actionCenter(){
		return $this->renderPartial('center');
	}
        //自定义导航
        public function actionZdydh(){
		return $this->renderPartial('zdydh');
	}
        //汇率配置
        public function actionHlpz(){
		return $this->renderPartial('hlpz');
	}
        //行业管理
        public function actionHygl(){
		return $this->renderPartial('hygl');
	}
        //技能管理
        public function actionJngl(){
		return $this->renderPartial('jngl');
	}
        //oauth登录
        public function actionOauthlogin(){
		return $this->renderPartial('oauthlogin');
	}
        //地图接口
        public function actionDtjk(){
		return $this->renderPartial('dtjk');
	}
        //短信配置
        public function actionDxpz(){
		return $this->renderPartial('dxpz');
	}
        //短信模板
        public function actionDxmb(){
		return $this->renderPartial('dxmb');
	}
        //支付接口
        public function actionZfjk(){
		return $this->renderPartial('zfjk');
	}
        //服务项管理
        public function actionFwxgl(){
		return $this->renderPartial('fwxgl');
	}
        //购买记录
        public function actionGmjl(){
		return $this->renderPartial('gmjl');
	}
}
?>
