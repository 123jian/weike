<?php

namespace frontend\controllers;
use app\models\KekeWitkeyMember;
use yii\web\Session;
class UserController extends \yii\web\Controller
{
    /*
     * 管理面板
     */
    //
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('index');
    }
    
    
    
    /*
     * 个人设置
     */
    //
    public function actionSetting()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('setting');
    }
        //基本资料
    public function actionBasic()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('setting');
    }
        //头像设置
    public function actionPicture()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('picture');
    }
        //安全设置
    public function actionSafe()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('safe');
    }
            //修改密码
    public function actionUppwd()
    {
        $session=new Session;
        $id=$session->get('uid');
        $arr=KekeWitkeyMember::find()->where(['uid' => $id])->one();
        //echo $arr['uid'];
        if(md5($_POST['old_password'])==$arr['password']){
            if($_POST['new_password']==$_POST['new_equal']){
                $model=new KekeWitkeyMember();
                $model->updateall(['password'=>  md5($_POST['new_password'])],['uid'=>$id]);
                echo "<script>alert('修改成功');location.href='./index.php?r=user/safe&stut=setting&view=safe'</script>";
            }else{
                echo "<script>alert('新密码输入不一致');location.href='./index.php?r=user/safe&stut=setting&view=safe'</script>";
            }
        }else{
            echo "<script>alert('原密码输入错误');location.href='./index.php?r=user/safe&stut=setting&view=safe'</script>";
        }
    }
        //账号绑定
    public function actionAccountbind()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('accountbind');
    }
        //店铺设置
    public function actionSpace()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('space');
    }
    
    
    
    
    /*
     * 财务管理
     */
    //
    public function actionFinance()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('finance');
    }
    
    
    
    /*
     * 雇主|买家
     */
    //
    public function actionEmployer()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('employer');
    }
    
    
    
    /*
     * 威客|卖家
     */
    //
    public function actionWitkey()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('witkey');
    }
    
    
    /*
     * 消息管理
     */
    //
    public function actionMessage()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('message');
    }
    
    
    /*
     * 我的收藏
     */
    //
    public function actionCollect()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('collect');
    }
    
    
    /*
     * 增值服务
     */
    //
    public function actionPayitem()
    {
        $this->layout='@app/views/layouts/header1.php';
        return $this->render('payitem');
    }
}
