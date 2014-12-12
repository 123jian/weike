<?php
//namespace yii\controller;
use Yii;
use yii\base\InlineAction;
use yii\helpers\Url;


class PublicController extends \yii\web\Controller{
    public function __construct($id, $module, $config = [])
    {
        $this->id = $id;
        $this->module = $module;
        parent::__construct($config);
        if(empty($_SESSION['username'])){
			echo "<script>alert('请先登录');location.href='index.php?r=index/login'</script>";
			die;
	}
    }
}

?>
