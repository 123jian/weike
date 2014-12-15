<?php

namespace frontend\controllers;
use app\models\KekeWitkeyMember;
use yii\web\Session;
include './config.inc.php';
include './uc_client/client.php';
class LoginController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/header.php';
        return $this->render('index');
    }
    
    public function actionLogin()
    {
        $arr=KekeWitkeyMember::find()->where(['username' => $_POST['txt_account']])->one();
        if($arr){
            $pwd=KekeWitkeyMember::find()->where(['username' => $_POST['txt_account'],'password'=>md5($_POST['pwd_password'])])->one(); 
            if($pwd){
               // echo $pwd['uid'];
                $session = new Session;
                $session->set('uid', $pwd['uid']);
                //$_SESSION['uid']=$pwd['uid'];
                $session->set('name', $pwd['username']);
                list($uid, $username, $password, $email) = uc_user_login($_POST['txt_account'], $_POST['pwd_password']);
				//echo $uid;die;
				if($uid>0) {
					//echo '11111l';die;
				echo uc_user_synlogin($uid);
				//header("refresh:1;url=http://www.10.com/discuz_x3.2_sc_gbk/upload");  //登录成功，1秒之后跳转。这里需注意，一定要有一个前端页面的跳转，方便用户给ucenter发送登陆成功的信息
				} //die;
                echo "<script>location.href='./index.php?r=index'</script>";
            }else{
                echo "<script>alert('密码错误');location.href='./index.php?r=index'</script>";
            }
            
        }else{
            echo "<script>alert('用户名错误');location.href='./index.php?r=index'</script>";
        }
    }
    public function actionlogin_frm()
    {
        echo "aa";
    }
    public function actionLogout()
    {
        $session = new Session;
        $session->remove('uid');
        $session->remove('name');
		$this->redirect(array('index/index'));
    }
}
