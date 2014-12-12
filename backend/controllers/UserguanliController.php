<?php
namespace backend\controllers;
use Yii;
use yii\db\Query;
use yii\data\Pagination;

use app\models\Classs;
use app\models\KekeWitkeyMemberGroup;
use app\models\KekeWitkeySpace;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;


class UserguanliController extends Controller{
    public $enableCsrfValidation = false;
        /*
        用户管理：添加用户
        */
	public function actionIndex()
	{
                $str=KekeWitkeyMemberGroup::find()->all();
		return $this->renderPartial('adduser',['str'=>$str]);
	}
	//添加用户
        public function actionUseradd()
	{
            //print_r($_POST);
            $model = new \app\models\KekeWitkeyMember();
            $model->username = $_POST['username'];
            $model->password = $_POST['password'];
            $model->email = $_POST['email'];
            //$model->group_id = $_POST['group_id'];
            $model2=new KekeWitkeySpace();
            $model2->username = $_POST['username'];
            $model2->password = MD5($_POST['password']);
            $model2->email = $_POST['email'];
            $model2->group_id = $_POST['group_id'];
            $model2->reg_time = time();
            $model2->reg_ip = $_SERVER['REMOTE_ADDR'];
            if($model->insert()&&$model2->insert()){
                echo "<script>alert('添加成功');location.href='./index.php?r=userguanli/yhgl'</script>";
            }else{
                echo "<script>alert('添加失败');location.href='./index.php?r=userguanli/yhgl'</script>";
            }
            //$model->username = $_POST['username'];
                //$str=KekeWitkeyMemberGroup::find()->all();
		//return $this->renderPartial('adduser',['str'=>$str]);
	}

        /*		 
         * 用户管理
         */
	public function actionYhgl()
	{
            $this->layout='@app/views/layouts/admin.php';
            //$this->layout='@app/views/layouts/main.php';
            $model=new Query();
 
            $data = $model->from(['keke_witkey_space','keke_witkey_member_group'])->where("keke_witkey_space.group_id=keke_witkey_member_group.group_id order by reg_time desc")->all();
            //print_r($data);die;
            $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
            $data=$model->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($data);
       /*return $this->render('comment',[
             'model' => $model,
             'pages' => $pages,
       ]);*/
            
            return $this->render('usergl',['data'=>$data,'pages' => $pages]);
	}
        //用户管理编辑
	public function actionBianji()
	{
            $this->layout='@app/views/layouts/admin.php';
                //print_r($_GET['id']);
                $data=KekeWitkeySpace::findOne($_GET['id']);
                //print_r($a['username']);
                $str=KekeWitkeyMemberGroup::find()->all();
                //print_r($str);die;
		return $this->render('bianji',['data'=>$data,'str'=>$str]);
	}
        //修改
        public function actionBianjiup(){
            $model=new KekeWitkeySpace();
            $update=$model->updateall(['group_id'=>$_POST['group_id'],'password'=>md5($_POST['password']),'email'=>$_POST['email']],["uid"=>$_POST['edituid']]);
            if($update){
                echo "<script>alert('修改成功');location.href='./index.php?r=userguanli/yhgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=userguanli/yhgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }
        //删除
        public function actionDeluser(){
            //print_r($_GET);die;
            $a=KekeWitkeySpace::findOne($_GET['id'])->delete();
            if($a){
                echo "<script>alert('删除成功');location.href='./index.php?r=userguanli/yhgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=userguanli/yhgl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }

/*	    用户组
	*/
	public function actionYhz()
	{
            $this->layout='@app/views/layouts/admin.php';
            //$this->layout='@app/views/layouts/main.php';
            $model=new Query();
 
            $data = $model->from(['keke_witkey_space','keke_witkey_member_group'])->where("keke_witkey_space.group_id=keke_witkey_member_group.group_id order by reg_time desc")->all();
            //print_r($data);die;
            $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
            $data=$model->offset($pages->offset)->limit($pages->limit)->all();
            
            
            return $this->render('usergroup',['data'=>$data,'pages' => $pages]);
	}
	//删除用户组
        public function actionGroupdel()
	{
                //print_r($_GET['id']);
            $a=KekeWitkeySpace::findOne($_GET['id'])->delete();
            if($a){
                echo "<script>alert('删除成功');location.href='./index.php?r=userguanli/yhz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=userguanli/yhz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        //修改用户组
        public function actionGroupup(){
            $this->layout='@app/views/layouts/admin.php';
            $data=KekeWitkeySpace::findOne($_GET['id']);
            $str=KekeWitkeyMemberGroup::find()->all();
            //print_r($str);die;
            return $this->render('groupup',['data'=>$data,'str'=>$str]);
        }
        //执行修改
        public function actionGroupupdata(){
            //print_r($_POST['fds']);die;
            $model=new KekeWitkeySpace();
            $update=$model->updateall(['username'=>$_POST['fds']['username'],'phone'=>md5($_POST['fds']['phone']),'email'=>$_POST['fds']['email'],'qq'=>$_POST['fds']['qq'],'group_id'=>$_POST['fds']['group_id']],["uid"=>$_POST['fds']['uid']]);
            if($update){
                echo "<script>alert('修改成功');location.href='./index.php?r=userguanli/yhz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=userguanli/yhz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }
/*系统组管理：系统组管理
	*/
	public function actionXtz()
	{
            $usergroup=KekeWitkeyMemberGroup::find()->all();
            //echo "<pre>";
            //print_r($usergroup);
            return $this->renderPartial('xtgroup',['data'=>$usergroup]);
	}

/*			 添加系统组
	*/
	public function actionAddxt()
	{
		return $this->renderPartial('addgroup');
	}
        //添加
        public function actionAddgroup()
	{
            //print_R($_POST);die;
            $arr= implode(",",$_POST['chb_resource']);
            $model = new KekeWitkeyMemberGroup();
            $model->groupname = $_POST['txt_groupname'];
            $model->group_roles = $arr;
            $model->on_time = time();
            
            if($model->insert()){
                echo "<script>alert('添加成功');location.href='./index.php?r=userguanli/xtz'</script>";
            }else{
                echo "<script>alert('添加失败');location.href='./index.php?r=userguanli/xtz'</script>";
            }
		//return $this->renderPartial('addgroup');
	}
	//系统组删除
        public function actionSystdel()
	{
            $res=  KekeWitkeyMemberGroup::findOne($_GET['id'])->delete();
            if($res){
                echo "<script>alert('删除成功');location.href='./index.php?r=userguanli/xtz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=userguanli/xtz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
	}
        
        //系统组编辑
        public function actionSystup()
	{
            $this->layout='@app/views/layouts/admin.php';
            //print_r($_GET['id']);
            $sys=  KekeWitkeyMemberGroup::findOne($_GET['id']);
            //print_r($sys);
            return $this->render('systup',['sys'=>$sys]);
	}
        //系统组编辑
        public function actionSystupdata()
	{
            $this->layout='@app/views/layouts/admin.php';
            //print_r($_POST);die;
            $model=new KekeWitkeyMemberGroup();
            $roles= implode(",", $_POST['chb_resource']);
            $update=$model->updateall(['groupname'=>$_POST['txt_groupname'],'group_roles'=>$roles],["group_id"=>$_POST['id']]);
            if($update){
                echo "<script>alert('修改成功');location.href='./index.php?r=userguanli/xtz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=userguanli/xtz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
            //return $this->render('systup',['sys'=>$sys]);
	}
        /*用户体系：信誉规则
	*/
	public function actionXygz()
	{
            $rule=\app\models\KekeWitkeyMarkRule::find()->all();
            return $this->renderPartial('xinyurule',['rule'=>$rule]);
	}
        //信誉规则添加
        public function actionXygzadd()
	{
            return $this->renderPartial('xinyuruleadd');
	}
        public function actionXygzadding()
	{
            //print_r($_POST);
            //$rule=\app\models\KekeWitkeyMarkRule::find()->all();
            $model = new \app\models\KekeWitkeyMarkRule();
            $model->g_value = $_POST['txt_g_value'];
            $model->m_value = $_POST['txt_m_value'];
            $model->g_title = $_POST['txt_g_title'];
            $model->m_title = $_POST['txt_m_title'];
            
            if($model->insert()){
                echo "<script>alert('添加成功');location.href='./index.php?r=userguanli/xygz'</script>";
            }else{
                echo "<script>alert('添加失败');location.href='./index.php?r=userguanli/xygz'</script>";
            }
            //$rule=\app\models\KekeWitkeyMarkRule::find()->all();
            //return $this->renderPartial('xygz');
	}
        //信誉规则删除
        public function actionXygzdel(){
            $res=  \app\models\KekeWitkeyMarkRule::findOne($_GET['id'])->delete();
            if($res){
                echo "<script>alert('删除成功');location.href='./index.php?r=userguanli/xygz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=userguanli/xygz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }
        //信誉规则编辑页面
        public function actionXygzup()
	{
            $this->layout='@app/views/layouts/admin.php';
            //print_r($_GET['id']);
            $rule= \app\models\KekeWitkeyMarkRule::findOne($_GET['id']);
            //print_r($rule);
            return $this->render('xygzup',['rule'=>$rule]);
	}
        //信誉规则修改
        public function actionXygzupdata (){
            //print_r($_POST);
            $model=new \app\models\KekeWitkeyMarkRule();
            $update=$model->updateall(['g_value'=>$_POST['txt_g_value'],'m_value'=>$_POST['txt_m_value'],'g_title'=>$_POST['txt_g_title'],'m_title'=>$_POST['txt_m_title']],["mark_rule_id"=>$_POST['hdn_mark_rule_id']]);
            if($update){
                echo "<script>alert('修改成功');location.href='./index.php?r=userguanli/xygz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=userguanli/xygz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }
/*         互评配置
	*/
	public function actionHppz()
	{
            $this->layout='@app/views/layouts/admin.php';
            $model=new Query();
            $data = $model->from(['keke_witkey_mark_config','keke_witkey_model'])->where("keke_witkey_mark_config.obj=keke_witkey_model.model_code")->all();
            
            $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
            $data=$model->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($data);die;
            
            return $this->render('hppz',['data'=>$data,'pages' => $pages]);
            
		//return $this->renderPartial('hppz');
	}
        //互评配置删除
        public function actionHppzdel(){
            $res= \app\models\KekeWitkeyMarkConfig::findOne($_GET['id'])->delete();
            if($res){
                echo "<script>alert('删除成功');location.href='./index.php?r=userguanli/hppz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=userguanli/hppz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }   
        //互评配置编辑页面
        public function actionHppzbj(){
            $this->layout='@app/views/layouts/admin.php';
            $model=new Query();
            $id=$_GET['id'];
            $data = $model->from(['keke_witkey_mark_config','keke_witkey_model'])->where("keke_witkey_mark_config.obj=keke_witkey_model.model_code and mark_config_id=$id")->all();
            //print_r($data);die;
            return $this->render('hppzbj',['data'=>$data]);
        }
        //互评配置编辑
        public function actionHppzup(){
            //print_r($_POST);
            $model=new \app\models\KekeWitkeyMarkConfig();
            $update=$model->updateall(['good'=>$_POST['fds']['good'],'normal'=>$_POST['fds']['normal'],'bad'=>$_POST['fds']['bad']],["mark_config_id"=>$_POST['hdn_mark_config_id']]);
            if($update){
                echo "<script>alert('修改成功');location.href='./index.php?r=userguanli/hppz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('修改失败');location.href='./index.php?r=userguanli/hppz'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
            //return $this->render('hppzbj',['data'=>$data]);
        }
/*        互评记录
	*/
	public function actionHpjl()
	{
            $this->layout='@app/views/layouts/admin.php';
            $model=new Query();
            $data = $model->from(['keke_witkey_mark','keke_witkey_model'])->where("keke_witkey_mark.model_code=keke_witkey_model.model_code")->all(); 
            $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
            $data=$model->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($data);die;
            
            return $this->render('hpjl',['data'=>$data,'pages' => $pages]);
		//return $this->renderPartial('hpjl');
	}
        //互评记录删除
        public function actionHpjldel(){
            $res= \app\models\KekeWitkeyMark::findOne($_GET['id'])->delete();
            if($res){
                echo "<script>alert('删除成功');location.href='./index.php?r=userguanli/hpjl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }else{
                echo "<script>alert('删除失败');location.href='./index.php?r=userguanli/hpjl'</script>";
                    //$this->redirect("./index.php?r=userguanli/yhgl");
            }
        }   

/*用户反馈：交易维权
	*/
	public function actionJywq()
	{
            
		return $this->renderPartial('jywq');
	}

/*		   交易举报
	*/
	public function actionJyjb()
	{
		return $this->renderPartial('jyjb');
	}

/*		   投诉建议
	*/
	public function actionTsjy()
	{
		return $this->renderPartial('tsjy');
	}


/*认证管理：企业认证
	*/
	public function actionQyrz()
	{
		return $this->renderPartial('qyrz');
	}

/*		   银行认证
	*/
	public function actionBankrz()
	{
		return $this->renderPartial('bankrz');
	}
	
/*		   实名认证
	*/
	public function actionSmrz()
	{
		return $this->renderPartial('smrz');
	}

/*		   邮箱认证
	*/
	public function actionEmailrz()
	{
		return $this->renderPartial('emailrz');
	}

/*		   手机认证
	*/
	public function actionPhonerz()
	{
		return $this->renderPartial('phonerz');
	}

/*		   认证项目
	*/
	public function actionRzxm()
	{
		return $this->renderPartial('rzxm');
	}
}