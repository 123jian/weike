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

	//认证项目
	public function actionRzxm()
	{
		//$this->layout='@app/views/layouts/admin.php';
		$this->layout='@app/views/layouts/admin.php';	
		$data = KppwCommodity::find();
		$pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>'4']);
		$model = $data->offset($pages->offset)->limit($pages->limit)->all();
		return $this->render('rzxm',['model'=>$model,
			'pages'=>$pages,

			]);
	}

	//禁用
	public function actionUpd(){
		//$connection=Yii::app()->db;
		$id = $_GET['id'];
		//echo $id;
		$sql="update kppw_commodity set c_state=3 where commodity_id = $id";
		//$rowsa=$connection->createCommand($sql)->execute();
		if($sql){
			echo"<script>alert('禁用成功');location.href='index.php?r=index/rzxm'</script>";
		}else{
			echo"<script>alert('已禁用');location.href='index.php?r=index/rzxm'</script>";
		}
	}


	//删除
	public function actionShanc($id)
	{
		$data= KppwCommodity::findOne($id);
		$data->delete();
		if($data)
		{
			 $this->redirect(array('rzxm'));
		}
	}
}
?>