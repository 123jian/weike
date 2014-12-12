<?php
use Yii;
use app\models\Classs;
use app\models\KekeWitkeyMember;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
session_start();
class LoginController extends Controller{
    public $enableCsrfValidation = false;
    //登录
        public function actionLogin(){
            //print_R($_POST);die;
            $name=@$_POST['username'];
            $pwd=@$_POST['password'];
            echo "<pre>";
            $a=KekeWitkeyMember::find()->where(['username' => $name])->one();
            //print_R($a);die;
            if($a){
                $b=KekeWitkeyMember::find()->where(['password' => md5($pwd)])->one();
                if($b){
                    //echo"登录成功";
                    $this->redirect(array('index/main'));
                    //print_r($b);
                    //echo $b['username'];
                    $_SESSION["username"]=$b['username'];
                }else{
                    $this->redirect(array('login/login'));
                }
            }else{
                //echo "<script> alert('11') </script>";
                $this->redirect(array('login/login'));
            }
	}
        //退出
        public function actionLoginout(){
                unset($_SESSION["username"]);
		$this->redirect(array('index/index'));
	}
    
}
?>
