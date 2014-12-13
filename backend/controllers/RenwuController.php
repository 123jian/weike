<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\KekeWitkeyTask;
use app\models\KekeWitkeyModel;
use yii\db\Query;
use yii\data\Pagination; 
use app\models\KekeWitkeyIndustry;
class RenwuController extends Controller{
        //单人任务管理
    public $enableCsrfValidation = false;
        public function actionDanrenrwgl(){
                $model=new query();
                $model->from(['keke_witkey_model','keke_witkey_task'])->where(
                        "keke_witkey_task.model_id=keke_witkey_model.model_id and keke_witkey_task.model_id=1 order by task_id desc")->all();
               
                $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
                $data=$model->offset($pages->offset)->limit($pages->limit)->all();
                
                
                
                return $this->renderPartial('danrenrwgl',['arr'=>$data,'pages'=>$pages]);
	}
        public function actionDrenrwgl(){
           // print_r($_GET);die;
            $where=" keke_witkey_task.model_id=keke_witkey_model.model_id and keke_witkey_task.model_id=1";
         
            if($_GET['task_id']){
                $where.=" and task_id=".$_GET['task_id'];
            }
            if($_GET['task_title']){
                $where.=" and task_title like '".$_GET['task_title']."'";
            }
            if($_GET['task_status']){
                $where.=" and task_status=".$_GET['task_status'];
            }
            
            $where.=" order by ".$_GET['ord1']." ".$_GET['ord2']."";
            
                
                $model=new query();
                $model->from(['keke_witkey_model','keke_witkey_task'])->where($where)->all();
               
                $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>$_GET['pag']]);
                $data=$model->offset($pages->offset)->limit($pages->limit)->all();
                
                
                
                return $this->renderPartial('danrenrwgl',['arr'=>$data,'pages'=>$pages,'get'=>$_GET]);
	}
            //单人任务详细
        public function actionDanrenrwview(){
                $model=new query();
                $arr=$model->from(['keke_witkey_model','keke_witkey_task'])->where(
                        "keke_witkey_task.model_id=keke_witkey_model.model_id and keke_witkey_task.task_id=".$_GET['id'])->all();
		return $this->renderPartial('danrenrwview',['arr'=>$arr]);
	}
            //删除单人任务
        public function actionDelrenwu(){
            $id='('.$_GET['id'].')';
            //echo  $id;die;
		$row=KekeWitkeyTask::deleteAll("task_id in $id");
		if($row){
                        $this->redirect(array('renwu/danrenrwgl'));
		}else{
			echo "<script>alert('删除失败！');history.go(-1);</script>";  
		}
	}
        public function actionUprenwu(){
            $id='('.$_GET['id'].')';
            //echo  $id;die;
		 $model=new KekeWitkeyTask();
           // print_r($_POST);
                $update=$model->updateall(['is_top'=>1],"task_id in $id");
		if($update){
                        $this->redirect(array('renwu/danrenrwgl'));
		}else{
			echo "<script>alert('修改失败！');history.go(-1);</script>";  
		}
	}
            //修改单人任务
        public function actionUpdanren(){
            $model=new KekeWitkeyTask();
           // print_r($_POST);
            $update=$model->updateall($_POST,["task_id"=>$_POST['task_id']]);
            $this->redirect(array('renwu/danrenrwgl'));
	}
        //单人任务配置
        public function actionDanrenrwpz(){
                $arr=KekeWitkeyModel::find()->where(['model_id' => '1'])->all(); 
		return $this->renderPartial('danrenrwpz',['arr'=>$arr]);
	}
        public function actionUpdrpz(){
                 $model=new KekeWitkeyModel();
                 $update=$model->updateall($_POST['fds'],["model_id"=>$_POST['fds']['model_id']]);
                 $this->redirect(array('renwu/danrenrwpz'));
	}
        //多人任务管理
        public function actionDuorenrwgl(){
             $model=new query();
                $model->from(['keke_witkey_model','keke_witkey_task'])->where(
                        "keke_witkey_task.model_id=keke_witkey_model.model_id and keke_witkey_task.model_id=2 order by task_id desc")->all();
               
                $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
                $data=$model->offset($pages->offset)->limit($pages->limit)->all();
		return $this->renderPartial('duorenrwgl',['arr'=>$data,'pages'=>$pages]);
	}
        
        
            //多人任务删除
        public function actionDelduorenwu(){
            $id='('.$_GET['id'].')';
            //echo  $id;die;
		$row=KekeWitkeyTask::deleteAll("task_id in $id");
		if($row){
                        $this->redirect(array('renwu/duorenrwgl'));
		}else{
			echo "<script>alert('删除失败！');history.go(-1);</script>";  
		}
	}
        public function actionUpdrenwu(){
            $id='('.$_GET['id'].')';
            //echo  $id;die;
		 $model=new KekeWitkeyTask();
           // print_r($_POST);
                $update=$model->updateall(['is_top'=>1],"task_id in $id");
		if($update){
                        $this->redirect(array('renwu/danrenrwgl'));
		}else{
			echo "<script>alert('修改失败！');history.go(-1);</script>";  
		}
	}
        //多人任务配置
        public function actionDuorenrwpz(){
                $arr=KekeWitkeyModel::find()->where(['model_id' => '2'])->all(); 
		return $this->renderPartial('duorenrwpz',['arr'=>$arr]);
	}
        public function actionUpdurpz(){
                 $model=new KekeWitkeyModel();
                 $update=$model->updateall($_POST['fds'],["model_id"=>$_POST['fds']['model_id']]);
                 $this->redirect(array('renwu/duorenrwpz'));
	}
        
        //计件任务管理
        public function actionJijianrwgl(){
             $model=new query();
                $model->from(['keke_witkey_model','keke_witkey_task'])->where(
                        "keke_witkey_task.model_id=keke_witkey_model.model_id and keke_witkey_task.model_id=3 order by task_id desc")->all();
               
                $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
                $data=$model->offset($pages->offset)->limit($pages->limit)->all();
               
		return $this->renderPartial('jijianrwgl',['arr'=>$data,'pages'=>$pages]);
	}
        
        
        
        
        //计件任务配置
        public function actionJijianrwpz(){
		return $this->renderPartial('jijianrwpz');
	}
        //普通任务管理
        public function actionPutongrwgl(){
		return $this->renderPartial('putongrwgl');
	}
        //普通任务配置
        public function actionPutongrwpz(){
		return $this->renderPartial('putongrwpz');
	}
        //定金任务管理
        public function actionDingjinrwgl(){
		return $this->renderPartial('dingjinrwgl');
	}
        //顶金任务配置
        public function actionDingjinrwpz(){
		return $this->renderPartial('dingjinrwpz');
	}
        
}
?>