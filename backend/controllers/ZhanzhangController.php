<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;


class ZhanzhangController extends Controller{
/*
站长工具：MySQL管理
	*/
	public function actionIndex()
	{
		return $this->renderPartial('mysqlguanli');
	}

/*
		 系统日志
*/
	public function actionXtrz()
	{
		return $this->renderPartial('xitongrizhi');
	}


/*		 附件管理
	*/
	public function actionFjgl()
	{
		return $this->renderPartial('fujianguanli');
	}


/*		 更新缓存
	*/
	public function actionGxhc()
	{
		return $this->renderPartial('genxinhc');
	}

/*		 标签管理
	*/
	public function actionBqgl()
	{
		return $this->renderPartial('bqgl');
	}

/*		模板管理
	*/
	public function actionMbgl()
	{
		return $this->renderPartial('mbgl');
	}


/*		友情链接
    */
	public function actionYqlj()
	{
		return $this->renderPartial('yqlj');
	}

/*		动态管理
	*/
	public function actionDtgl()
	{
		return $this->renderPartial('dtgl');
	}

/*		广告管理
	*/
	public function actionGggl()
	{
		return $this->renderPartial('gggl');
	}
}