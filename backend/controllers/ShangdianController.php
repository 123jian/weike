<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\data\Pagination;
use app\models\KekeWitkeyModel;
use app\models\KekeWitkeyShop;
use app\models\KekeWitkeyService;
class ShangdianController extends Controller{
    public $enableCsrfValidation = false;
        //管理首页
        public function actionIndex(){
            $this->layout='@app/views/layouts/admin.php';
            $data = KekeWitkeyShop::find();
            $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '5']);
            $model = $data->offset($pages->offset)->limit($pages->limit)->all();//'order by fina_id desc'
            //print_r($model);die;
            return $this->render('glsy',['data'=>$model,'pages' => $pages]);
		//return $this->renderPartial('glsy');
	}
        //管理首页通过审核
        public function actionTg(){
            //print_r($_GET);
            $model=new KekeWitkeyShop();
            $update=$model->updateall(['shop_status'=>1],["shop_id"=>$_GET['id']]);
            if($update){

                $this->redirect("./index.php?r=shangdian/index");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=shangdian/index'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //管理首页不通过审核
        public function actionBtg(){
            //print_r($_GET);
            $model=new KekeWitkeyShop();
            $update=$model->updateall(['shop_status'=>2],["shop_id"=>$_GET['id']]);
            if($update){

                $this->redirect("./index.php?r=shangdian/index");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=shangdian/index'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //关闭状态
        public function actionOn(){
            //print_r($_GET);
            $model=new KekeWitkeyShop();
            $update=$model->updateall(['shop_status'=>3],["shop_id"=>$_GET['id']]);
            if($update){

                $this->redirect("./index.php?r=shangdian/index");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=shangdian/index'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //开启状态
        public function actionOff(){
            //print_r($_GET);
            $model=new KekeWitkeyShop();
            $update=$model->updateall(['shop_status'=>1],["shop_id"=>$_GET['id']]);
            if($update){

                $this->redirect("./index.php?r=shangdian/index");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=shangdian/index'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //店铺删除
        public function actionDianpudel(){
            //print_r($_GET);
            $res= KekeWitkeyShop::findOne($_GET['id'])->delete();
            if($res){

                $this->redirect("./index.php?r=shangdian/index");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=shangdian/index'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //查看
        public function actionShow(){
            //print_r($_GET);
            $this->layout='@app/views/layouts/admin.php';
            $data=  KekeWitkeyShop::findOne($_GET['id']);
            //print_r($data);die;
            return $this->render('show',['data'=>$data]);
	}
        //作品订单管理
        public function actionZpddgl(){
            $this->layout='@app/views/layouts/admin.php';
            //$this->layout='@app/views/layouts/main.php';
            $model=new Query();
 
            $data = $model->from(['keke_witkey_order_detail','keke_witkey_order'])->where("keke_witkey_order_detail.order_id=keke_witkey_order.order_id order by order_time desc")->all();
            //print_r($data);die;
            $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
            $data=$model->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($data);die;
            return $this->render('zpddgl',['data'=>$data,'pages' => $pages]);
		//return $this->renderPartial('zpddgl');
	}
        //作品订单删除
        public function actionOrderdel(){
            
            $order= \app\models\KekeWitkeyOrder::findOne($_GET['id'])->delete();
            if($order){
                $this->redirect("./index.php?r=shangdian/zpddgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=shangdian/zpddgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //作品管理
        public function actionZpgl(){
            $this->layout='@app/views/layouts/admin.php';
            //$this->layout='@app/views/layouts/main.php';
            $model=new Query();
            $data = $model->from(['keke_witkey_service','keke_witkey_space'])->where("keke_witkey_service.uid=keke_witkey_space.uid and keke_witkey_service.service_status!=1 order by service_id desc")->all();
            //print_r($data);die;
            $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
            $data=$model->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($data);die;
            return $this->render('zpgl',['data'=>$data,'pages' => $pages]);
		//return $this->renderPartial('zpgl');
	}
        //作品编辑
        public function actionZpglbj(){
            $this->layout='@app/views/layouts/admin.php';
            //print_R($_POST);
            return $this->render('zpglbj');
        }
        public function actionZpglup(){
            $this->redirect("./index.php?r=shangdian/zpgl");
        }
        //作品上架
        public function actionZpglsj(){
            //print_r($_GET);
            $model=new KekeWitkeyService();
            $update=$model->updateall(['service_status'=>2],["service_id"=>$_GET['id']]);
            if($update){

                $this->redirect("./index.php?r=shangdian/zpgl");
            }else{
                echo "<script>alert('上架失败');location.href='./index.php?r=shangdian/zpgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //作品下架
        public function actionZpglxj(){
            //print_r($_GET);
            $model=new KekeWitkeyService();
            $update=$model->updateall(['service_status'=>3],["service_id"=>$_GET['id']]);
            if($update){

                $this->redirect("./index.php?r=shangdian/zpgl");
            }else{
                echo "<script>alert('下架失败');location.href='./index.php?r=shangdian/zpgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //作品删除
        public function actionDeluser(){
            //print_r($_GET);die;
            $del=  KekeWitkeyService::findOne($_GET['id'])->delete();
            if($del){
                echo "<script>alert('删除成功');location.href='./index.php?r=shangdian/zpgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=shangdian/zpgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }
        //批量操作
        public function actionPiliang(){
            
            //print_r($_GET);die;
            //1是批量删除；2是批量上架；3是批量下架
            if($_GET['act']==1){
                //echo 111;
                $id='('.$_GET['id'].')';
                //echo $id;die;
		$row=KekeWitkeyService::deleteAll("service_id in $id");
		if($row){
                    $this->redirect(array('shangdian/zpgl'));
		}else{
                    echo "<script>alert('删除失败！');history.go(-1);</script>";  
		}
            }else if($_GET['act']==2){
                $model=new KekeWitkeyService();
                $id='('.$_GET['id'].')';
                $update=$model->updateall(['service_status'=>2],"service_id in $id");
                if($update){

                    $this->redirect("./index.php?r=shangdian/zpgl");
                }else{
                    echo "<script>alert('下架失败');location.href='./index.php?r=shangdian/zpgl'</script>";
                        //$this->redirect("./index.php?r=userguanli/yhgl");
                }
            }else if($_GET['act']==3){
                $model=new KekeWitkeyService();
                $id='('.$_GET['id'].')';
                $update=$model->updateall(['service_status'=>3],"service_id in $id");
                if($update){

                    $this->redirect("./index.php?r=shangdian/zpgl");
                }else{
                    echo "<script>alert('下架失败');location.href='./index.php?r=shangdian/zpgl'</script>";
                        //$this->redirect("./index.php?r=userguanli/yhgl");
                }
            }
        }
        //作品配置and服务配置
        public function actionZppz(){
            $this->layout='@app/views/layouts/admin.php';
            //$model=new KekeWitkeyModel;
            //print_r($_GET);die;
            if(@$_GET['id']){
                $id=$_GET['id'];
            }else{
                $id=6;
            }
            
            $data=  KekeWitkeyModel::findOne($id);
            //print_r($data);die;
            if($data['model_status']==1){
                return $this->render('zppz',['data'=>$data]);
            }else{
                //$data=KekeWitkeyModel::find('order by model_id')->where(['model_type' => 'task'])->all();
                $data=KekeWitkeyModel::findBySql("SELECT * FROM keke_witkey_model where model_type='task' order by model_id")->all();
                //print_r($data);die;
                return $this->render('zppzlist',['data'=>$data]);
            } 
	}
        //作品配置修改
        public function actionZppzup(){
            $this->layout='@app/views/layouts/admin.php';
            //print_r($_POST);
            $model=new KekeWitkeyModel();
            $update=$model->updateall($_POST['fds'],["model_id"=>$_POST['pk']['model_id']]);
            if($update){
                //echo "<script>alert('修改成功');location.href='./index.php?r=shangdian/zppz'</script>";
                $this->redirect("./index.php?r=shangdian/zppz");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=shangdian/zppz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
            
	}
        //任务禁用
        public function actionJy(){
            $this->layout='@app/views/layouts/admin.php';
            //print_r($_POST);
            $model=new KekeWitkeyModel();
            $update=$model->updateall(['model_status'=>0],["model_id"=>$_GET['id']]);
            if($update){
                //echo "<script>alert('修改成功');location.href='./index.php?r=shangdian/zppz'</script>";
                $this->redirect("./index.php?r=shangdian/zppz");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=shangdian/zppz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        public function actionQy(){
            $this->layout='@app/views/layouts/admin.php';
            //print_r($_POST);
            $model=new KekeWitkeyModel();
            $update=$model->updateall(['model_status'=>1],["model_id"=>$_GET['id']]);
            if($update){
                //echo "<script>alert('修改成功');location.href='./index.php?r=shangdian/zppz'</script>";
                $this->redirect("./index.php?r=shangdian/zppz");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=shangdian/zppz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //服务订单管理
        public function actionFwddgl(){
		return $this->renderPartial('fwddgl');
	}
        //服务管理
        public function actionFwgl(){
            $this->layout='@app/views/layouts/admin.php';
            //$this->layout='@app/views/layouts/main.php';
            $model=new Query();
            $data = $model->from(['keke_witkey_service','keke_witkey_space'])->where("keke_witkey_service.uid=keke_witkey_space.uid and keke_witkey_service.service_status=1 order by service_id desc")->all();
            //print_r($data);die;
            $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>3]);
            $data=$model->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($data);die;
            return $this->render('fwgl',['data'=>$data,'pages' => $pages]);
		//return $this->renderPartial('fwgl');
	}
        //服务配置
        public function actionFwpz(){
		return $this->renderPartial('fwpz');
	}
}

?>
