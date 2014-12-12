<?php
namespace backend\controllers;
use Yii;
use app\models\Classs;
use app\models\KekeWitkeyMember;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
session_start();
class IndexController extends Controller{
        //表单传值
        public $enableCsrfValidation = false;
        
	public function actionIndex(){
		return $this->renderPartial('login');
	}
        //登录
        public function actionLogin(){
            //print_R($_POST);die;
            $name=@$_POST['username'];
            $pwd=@$_POST['password'];
            echo "<pre>";
            $a=KekeWitkeyMember::find()->where(['username' => $name,'password' => md5($pwd)])->one();
            //print_R($a);die;
            if($a){
                    $this->redirect(array('index/main'));
                    $_SESSION["username"]=$a['username'];
            }else{
                //echo "<script> alert('11') </script>";
                $this->redirect(array('index/index'));
            }
	}
        //退出
        public function actionLoginout(){
                unset($_SESSION["username"]);
		$this->redirect(array('index/index'));
	}
        //购买记录
        public function actionGmjl(){
                return $this->renderPartial('gmjl');
        }
        //后台主页
	public function actionMain(){
		return $this->renderPartial('index');
	}
        //管理首页
        public function actionGlsy(){
		return $this->renderPartial('glsy');
	}
        //更新数据
        public function actionGxhc(){
		return $this->renderPartial('gxhc');
	}
	public function actionCenter(){
		return $this->renderPartial('center');
	}
}
?>