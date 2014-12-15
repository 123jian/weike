<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\db\Query;
use app\models\KekeWitkeyArticle;
use yii\data\Pagination;
use app\models\KppwMission;
use app\models\KppwCommodity;


class ZixunController extends Controller{
    
    public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法

    //网站公告
    public function actionIndex(){

            $this->layout='@app/views/layouts/admin.php';	
            $data = KppwMission::find();
            $pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>'5']);
            $model = $data->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($model);die;
            return $this->render('wzgg',['model'=>$model,
                    'pages'=>$pages,
                ]);
            }
			
    //任务搜索
    public function actionSearch(){
            $this->layout='@app/views/layouts/admin.php';
            $id = $_POST['de_id'];
            $title = $_POST['de_title'];
            $stata = $_POST['state'];
            $where = "1=1";
            if(!empty($id)){
                    $where.= " and mi_id=".$id;
            }
            if(!empty($title)){
                    $where.= " and de_title like "."'%".$title."%'";
            }
            if(!empty($stata)){
                    $where.= " and mi_shtype=".$stata;
            }
            $sql = "select * from kppw_mission where ".$where;
            //echo $sql;
            $data=KppwMission::findBySql($sql);

            $pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>'5']);
            $model = $data->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('wzgg',['model'=>$model,
            'pages'=>$pages,
            ]);
    }
    
//任务审核
    public function actionShenhe(){
            
            $id = $_GET['id'];
            $sql="update kppw_mission set mi_shtype=1 where mi_id = $id";
            if($sql){
                    echo"<script>alert('审核成功');location.href='index.php?r=zixun/index'</script>";
            }else{
                    echo"<script>alert('审核失败');location.href='index.php?r=zixun/index'</script>";
            }
    }

    //查看任务
    public function actionSee(){ 
            $this->layout='@app/views/layouts/admin.php';	
            $fen=new Query();
            $id = $_GET['id'];
            $sqla=$fen->from(['kppw_mission','kppw_reward'])->where("mi_id=$id")->all();

            return $this->render("see",array('info'=>$sqla));
    }
    
    
//网站简介
    public function actionWzjj(){
            $this->layout='@app/views/layouts/admin.php';	
            $fen=new Query();
            $sqla=$fen->from(['kppw_tore','kppw_user'])->where("kppw_tore.u_id=kppw_user.u_id")->all();
            return $this->render('wzjj',array('info'=>$sqla));
    }

    //商店店铺查看
    public function actionSd_select(){
            $this->layout='@app/views/layouts/admin.php';	
            $fen=new Query();
            $id = $_GET['id'];
            $sqla=$fen->from(['kppw_tore','kppw_user'])->where("kppw_tore.to_id=$id")->all();
            return $this->render('sd_select',array('info'=>$sqla));
    }
	
    //开启
    public function actionShk(){
            //$connection=Yii::app()->db;
            $id = $_GET['id'];
            //echo $id;
            $sql="update kppw_tore set to_check=1 where to_id = $id";
            //$rowsa=$connection->createCommand($sql)->execute();
            if($sql){
                    echo"<script>alert('开启成功');location.href='index.php?r=zixun/wzjj'</script>";
            }else{
                    echo"<script>alert('已开启');location.href='index.php?r=zixun/wzjj'</script>";
            }
    }
    //关闭
    public function actionShg(){
            //$connection=Yii::app()->db;
            $id = $_GET['id'];
            //echo $id;
            $sql="update kppw_tore set to_check=0 where to_id = $id";
            //$rowsa=$connection->createCommand($sql)->execute();
            if($sql){
                    echo"<script>alert('关闭成功');location.href='index.php?r=zixun/wzjj'</script>";
            }else{
                    echo"<script>alert('已关闭');location.href='index.php?r=zixun/wzjj'</script>";
            }
    }

    //文章管理
    public function actionWzgl(){

        $this->layout='@app/views/layouts/admin.php';

        //$this->actionSession();
        //$connection=Yii::app()->db;
        $sqla="select * from  kppw_commodity order by commodity_id desc";
        //echo $sqla;die;
        $rowsa=KppwCommodity::findBySql($sqla)->all();
        return $this->render('wzgl',array('info'=>$rowsa));
        //return $this->renderPartial('wzgl');
    }


    //作品搜索
    public function actionSoso(){
        //$connection=Yii::app()->db;
        //print_r($_POST);die;
        $id = $_POST['c_id'];
        $title = $_POST['c_name'];
        $state = $_POST['c_state'];
        $name = $_POST['c_namea'];
        $where = "1=1";
        if(!empty($id)){
                $where.= " and commodity_id=".$id;
        }
        if(!empty($title)){
                $where.= " and c_namea like "."'%".$title."%'";
        }
        if(!empty($state)){
                $where.= " and c_state=".$state;
        }
        if(!empty($name)){
                $where.= " and c_name=".$name;
        }
        $sql = "select * from kppw_commodity where ".$where;
        //echo $sql;die;
        $rowsa=KppwCommodity::findBySql($sql)->all();
        //print_r($rowsa);die;
        return $this->renderPartial('wzgl',array('info'=>$rowsa));
    }

    //文章作品批量删除
    public function actionDele(){

    $id='('.$_GET['id'].')';
    // echo $id;die;
            $row=KppwCommodity::deleteAll("commodity_id in $id");
            if($row){
           echo "<script>alert('删除成功！');history.go(-1);</script>";
            }else{
                echo "<script>alert('删除失败！');history.go(-1);</script>";  
            }
    }



    //文章作品编辑
    public function actionZpck(){

        $id=$_GET['id'];
        $result=KppwCommodity::findOne($id);
        return $this->renderPartial('zpbj',['result'=>$result]);
    }

    //文章作品编辑修改
   public function actionUpda(){

    $id=$_POST['h_id'];
    $KppwCommodity=new KppwCommodity();
    $KppwCommodity=$KppwCommodity::findOne($id);
    $KppwCommodity->c_namea = $_POST['c_name'];
    $KppwCommodity->c_price = $_POST['c_price'];
    $KppwCommodity->c_state = $_POST['c_state'];
    $KppwCommodity->c_describe = $_POST['c_describe'];

   // $KekeWitkeyArticle->pub_time = time();

    $count = $KppwCommodity->save();
        if($count) {
            echo "<script>alert('修改成功！');location.href='index.php?r=zixun/wzgl';</script>";
        } else {
            echo "<script>alert('修改失败！');location.href='index.php?r=zixun/upda_upda&id='+$id;</script>"; 
        }
    }

    //文章作品删除
    public function actionDpdel($id){

        $data= KppwCommodity::findOne($id);
        $data->delete();
        if($data)
        {
                $this->redirect(array('wzgl'));
        }
    }


    //商品上架
    public function actionUpd(){
        //$connection=Yii::app()->db;
        $id = $_GET['id'];
        //echo $id;
        $sql="update kppw_commodity set c_state=3 where commodity_id = $id";
        //$rowsa=$connection->createCommand($sql)->execute();
        if($sql){
                echo"<script>alert('下架成功');location.href='index.php?r=zixun/wzgl'</script>";
        }else{
                echo"<script>alert('已下架');location.href='index.php?r=zixun/wzgl'</script>";
        }
    }


    //商品审核
    public function actionSh(){
        //$connection=Yii:  :app()->db;
        $id = $_GET['id'];
        //echo $id;
        $sql="update kppw_commodity set c_state=1 where commodity_id = $id";
        //$rowsa=$connection->createCommand($sql)->execute();
        if($sql){
                echo"<script>alert('审核成功');location.href='index.php?r=zixun/wzgl'</script>";
        }else{
                echo"<script>alert('已审核');location.href='index.php?r=zixun/wzgl'</script>";
        }
    }
      
    //文章分类
    public function actionWzfl(){
            return $this->renderPartial('wzfl');
    }
    
     //案例管理
        public function actionAlgl (){

            $this->layout='@app/views/layouts/admin.php';	
            $data = KppwMission::find();
            $pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>'5']);
            $model = $data->offset($pages->offset)->limit($pages->limit)->all();

    return $this->render('algl',['model'=>$model,
            'pages'=>$pages,

            ]);
	}


    //案例搜索
    public function actionSos(){
        $this->layout='@app/views/layouts/admin.php';	
        //$connection=Yii::app()->db;
        //print_r($_POST);die;
        $id = @$_POST['de_id'];
        $title = @$_POST['de_title'];
        $stata = @$_POST['state'];
        $where = "1=1";
        if(!empty($id)){
                $where.= " and mi_id=".$id;
        }
        if(!empty($title)){
                $where.= " and de_title like "."'%".$title."%'";
        }
        if(!empty($stata)){
                $where.= " and mi_shtype=".$stata;
        }
        $sql = "select * from kppw_mission where ".$where;
        //echo $sql;
        $data=KppwMission::findBySql($sql);
        //print_r($rowsa);die;
        //return $this->renderPartial('algl',array('info'=>$rowsa));
        $pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>'5']);
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        //print_r($model);die;
        return $this->render('algl',['model'=>$model,
            'pages'=>$pages,
        ]);
    }
   
    //帮助分类
    public function actionBzfl(){
        return $this->renderPartial('bzfl');
    }
    //帮助管理
    public function actionBzgl(){

        unset($_COOKIE);
        $this->layout='@app/views/layouts/admin.php';
        $rows = KekeWitkeyArticle::find();
        $pages =new Pagination(['totalCount'=>$rows->count(),'pageSize'=>'10']);
        $model =$rows->offset($pages->offset)->limit($pages->limit)->all();          
        return $this->render('bzgl',['model'=>$model,
            'pages'=>$pages,]);
    }
    
    //帮助管理--删除
    public function actionBzgl_del(){

        $id=$_GET['art_id'];
        $result=KekeWitkeyArticle::findOne($id)->delete();
        if(!$result){   
           echo "<script>alert('删除失败！');</script>"; 
        }else{
          echo "<script>location.href='index.php?r=zixun/bzgl';</script>";
        }
    }
    //帮助管理--批量删除
    public function actionBzgl_pldel(){

        $str=$_GET['ids'];  
        $arr=substr($str,0,strlen($str)-1); 
        $result=KekeWitkeyArticle::deleteAll("art_id in ($arr)");
        if($result){
          echo "<script>location.href='index.php?r=zixun/bzgl';</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='index.php?r=zixun/bzgl';</script>";
        }
    }
    //帮助管理--添加
    public function actionBzgl_add(){            
        return $this->renderPartial('bzgl_add');
    }
    //帮助管理--添加
    public function actionBzgl_addpro(){
        
        $KekeWitkeyArticle=new KekeWitkeyArticle();
        $KekeWitkeyArticle->art_title = $_POST['fields']['art_title'];
        $KekeWitkeyArticle->art_cat_id = $_POST['fields']['art_cat_id'];
        $KekeWitkeyArticle->listorder = $_POST['fields']['listorder'];
        $KekeWitkeyArticle->username = $_POST['fields']['username'];
        $KekeWitkeyArticle->art_source = $_POST['fields']['art_source'];
      $KekeWitkeyArticle->is_recommend = $_POST['fields']['is_recommend'];
        $KekeWitkeyArticle->content = $_POST['fields']['content'];
        $KekeWitkeyArticle->seo_title = $_POST['fields']['seo_title'];
        $KekeWitkeyArticle->seo_keyword = $_POST['fields']['seo_keyword'];
        $KekeWitkeyArticle->seo_desc = $_POST['fields']['seo_desc'];
        $KekeWitkeyArticle->cat_type = $_POST['type'];
        $KekeWitkeyArticle->pub_time = time();
        $result=$KekeWitkeyArticle->save();
        if($result){
          echo "<script>location.href='index.php?r=zixun/bzgl';</script>"; 
        }else{
            echo "<script>alert('添加失败！');location.href='index.php?r=zixun/bzgl_add';</script>"; 
        }      
    }
    //帮助管理--编辑
    public function actionBzgl_update(){
        $id=$_GET['art_id'];
        $result=KekeWitkeyArticle::findOne($id);
        return $this->renderPartial('bzgl_update',['result'=>$result]);
    }
    //帮助管理--编辑处理
    public function actionBzgl_updatepro(){
        //echo "<pre>";
        //print_r($_POST);die;
        $id=$_POST['h_id'];
        $KekeWitkeyArticle=new KekeWitkeyArticle();
        $KekeWitkeyArticle=$KekeWitkeyArticle::findOne($id);
        $KekeWitkeyArticle->art_title = $_POST['fields']['art_title'];
        $KekeWitkeyArticle->art_cat_id = $_POST['fields']['art_cat_id'];
        $KekeWitkeyArticle->listorder = $_POST['fields']['listorder'];
        $KekeWitkeyArticle->username = $_POST['fields']['username'];
        $KekeWitkeyArticle->art_source = $_POST['fields']['art_source'];
   //$KekeWitkeyArticle->is_recommend = $_POST['fields']['is_recommend'];
        $KekeWitkeyArticle->content = $_POST['fields']['content'];
        $KekeWitkeyArticle->seo_title = $_POST['fields']['seo_title'];
        $KekeWitkeyArticle->seo_keyword = $_POST['fields']['seo_keyword'];
        $KekeWitkeyArticle->seo_desc = $_POST['fields']['seo_desc'];
        $KekeWitkeyArticle->cat_type = $_POST['type'];
        $KekeWitkeyArticle->pub_time = time();
        
        $count = $KekeWitkeyArticle->save();
        if($count) {
            echo "<script>alert('修改成功！');location.href='index.php?r=zixun/bzgl';</script>";
        } else {
            echo "<script>alert('修改失败！');location.href='index.php?r=zixun/bzgl_update&art_id='+$id;</script>"; 
        }
    }
    
    //多条件搜索
    public function actionBzgl_search(){
        //echo "<pre>";
        $where='1 ';
        if(!empty($a)){
           $_SESSION['where']=$_SESSION['where']; 
        }else{
            $a="";
            if(empty($_POST['w']['username']) && !empty($_COOKIE['author'])){
                $where.='';
                $where.=" and username like '%".@$_COOKIE['author']."%'";
            }else{
               $_SESSION['author']=@$_POST['w']['username'];
           $where.=" and username like '%".@$_POST['w']['username']."%'";
            }
            if(empty($_POST['w']['art_title']) && !empty($_COOKIE['art_title'])){
            $where.='';
            $where.=" and art_title like '%".@$_COOKIE['art_title']."%'";
            }else{
           setcookie('art_title',@$_POST['w']['art_title']);
           setcookie('author',@$_POST['w']['username']);
          $where.=" and art_title like '%".@$_POST['w']['art_title']."%'";
        }
            $_SESSION['where']=$where;
            $a=$_SESSION['where'];
        }
        //print_r($a);die;
        $this->layout='@app/views/layouts/admin.php';
        $rows = KekeWitkeyArticle::find()->where($a);
        //print_r($rows);die;
        $pages=new Pagination(['totalCount'=>$rows->count(),'pageSize'=>'10']);
        $model=$rows->offset($pages->offset)->limit($pages->limit)->all();        //print_r($model[0]);die;
        return $this->render('bzgl',['model'=>$model,
            'pages'=>$pages,]);
    }
        
}
?>
