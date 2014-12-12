<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;


class UsecenterController extends Controller
{
        /*
        应用中心
        */
	public function actionIndex()
	{
		return $this->renderPartial('usecenter');
	}

        /*
        广场管理        免费需求

        */
	public function actionMfxq()
	{
		return $this->renderPartial('mianfeixuqiu');
	}

        /*
                                        免费服务
        */
	public function actionMffw()
	{
		return $this->renderPartial('mianfeifuwu');
	}

        /*
                                        留言管理
        */
	public function actionLygl()
	{
		return $this->renderPartial('liuyanguanli');
	}

        /*
                                        动态管理
        */
	public function actionDtgl()
	{
		return $this->renderPartial('dongtaiguanli');
	}

        /*
                                        举报管理
        */
	public function actionJbgl()
	{
		return $this->renderPartial('jubaoguanli');
	}


        /*
        推广营销		推广配置管理
        */
	public function actionTgpz()
	{
		return $this->renderPartial('tuiguangpeizhi');
	}

        /*
                                        推广关系管理
        */
	public function actionTggx()
	{
		return $this->renderPartial('tuiguangguanxi');
	}

        /*
                                        推广财务管理
        */
	public function actionTgcw()
	{
		return $this->renderPartial('tuiguangcaiwu');
	}
}
?>