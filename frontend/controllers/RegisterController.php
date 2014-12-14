<?php

namespace frontend\controllers;
use Yii;
use yii\captcha\Captcha;
use app\models\KekeWitkeyMember;
use app\models\KekeWitkeyMemberGroup;
use yii\db\Command;
use yii\web\Session;
header("content-type:text/html;charset=utf-8");

class RegisterController extends \yii\web\Controller
{
    //注册页面
    public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法
    public function actionIndex()
    {
       $this->layout='@app/views/layouts/header.php';
       $model = new KekeWitkeyMember();

       return $this->render('index',['model'=>$model]);
    }

    //注册处理
    public function actionRegister_pro()
    {
       // echo "<pre>";
        //print_r($_POST);
        $txt_account= $_POST['txt_account'];
        $pwd_password=md5($_POST['pwd_password']);
        $txt_email= $_POST['txt_email'];

        $KekeWitkeyMember = new KekeWitkeyMember();
        //var_dump($model);DIE;
        //$KekeWitkeyMember->attributes=$_POST;
        $KekeWitkeyMember->username = $txt_account;
        $KekeWitkeyMember->password = $pwd_password;
        $KekeWitkeyMember->email = $txt_email;
        $KekeWitkeyMember->rand_code = "123abc";
       //echo "<pre>";var_dump($KekeWitkeyMember->Attributes);
        //$b='b';
       // var_dump($a);die;
        //print_r($b);die;
        if($KekeWitkeyMember->save()>0)
        {
            //$session->set('uid', $pwd['uid']);
            //$_SESSION['uid']=$pwd['uid'];
            $session = new session();
            $session->set('name', $txt_account);
            //echo $session->get('name');
            echo "<script>location.href='index.php?r=index';</script>";
        }else{
            echo "<script>alert('注册失败！');location.href='index.php?r=register';</script>";
        }
    }

}
