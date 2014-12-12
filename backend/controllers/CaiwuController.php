<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use app\models\Classs;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\KekeWitkeyFinance;

class CaiwuController extends Controller
{
/*财务模块：财务概况
	*/
	public function actionIndex()
	{
		return $this->renderPartial('cwgk');
	}

/*		  财务明细
	*/
	public function actionCwmx()
	{
            $this->layout='@app/views/layouts/admin.php';
            $data = KekeWitkeyFinance::find();
            $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '10']);
            $model = $data->offset($pages->offset)->limit($pages->limit)->all();
            //print_r($model);die;
            return $this->render('cwmx',['data'=>$model,'pages' => $pages]);
            //return $this->renderPartial('cwmx');
	}

/*		   财务分析
	*/
	public function actionCwfx()
	{
		return $this->renderPartial('cwfx');
	}

/*		  充值审核
	*/
	public function actionCzsh()
	{
		return $this->renderPartial('czsh');
	}

/*
		   提现审核
	*/
	public function actionTxsh()
	{
		return $this->renderPartial('txsh');
	}

/*		  手动充值

	*/
	public function actionSdcz()
	{
		return $this->renderPartial('sdcz');
	}
}