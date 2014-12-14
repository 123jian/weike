<?php

namespace frontend\controllers;
use yii\db\Query;
use yii\data\Pagination;
use yii\web\Controller;
//use keke
class TasklistController extends Controller
{
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/header.php';
        $fenlei=\app\models\KekeWitkeyIndustry::find()->where(['indus_pid'=>0])->all();
        $moshi= \app\models\KekeWitkeyModel::find()->all();
        $can=[];
        $where='1=1';
        if(@$_GET['fl']){
            $can=['fl'=>$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>@$_GET['min'],'max'=>@$_GET['max']];
            $indus_id=$_GET['fl'];
            $where.=" and indus_id=$indus_id";
        }
        if(@$_GET['ms']){
            $can=['fl'=>@$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>@$_GET['min'],'max'=>@$_GET['max']];
            $model_id=$_GET['ms'];
            $where.=" and keke_witkey_task.model_id=$model_id";
        }
        if(@$_GET['min']){
            $can=['fl'=>@$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>$_GET['min'],'max'=>@$_GET['max']];
            $min=$_GET['min'];
            $where.=" and real_cash>$min";
        }
        if(@$_GET['max']){
            $can=['fl'=>@$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>@$_GET['min'],'max'=>$_GET['max']];
            $max=$_GET['max'];
            $where.=" and task_cash<$max";
        }
        $model=new Query();
        $data = $model->from(['keke_witkey_task','keke_witkey_model'])->where("keke_witkey_task.model_id=keke_witkey_model.model_id and $where order by end_time desc")->all();
        //print_r($_GET);//die;
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>20]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',['fenlei'=>$fenlei,'moshi'=>$moshi,'list'=>$data,'pages' => $pages,'can'=>$can]);
    }
   
}