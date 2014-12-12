<?php

namespace frontend\controllers;
use app\models\KekeWitkeyMember;
use yii\web\Session;
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
    }
}
