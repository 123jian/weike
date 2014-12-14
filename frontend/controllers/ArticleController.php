<?php

namespace frontend\controllers;
use app\models\KekeWitkeyArticle;
use app\models\KekeWitkeyArticleCategory;
class ArticleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=new query();
        $model->from(['keke_witkey_model','keke_witkey_task'])->where(
                "keke_witkey_task.model_id=keke_witkey_model.model_id and keke_witkey_task.model_id=1 order by task_id desc")->all();

        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all();
               
        return $this->renderpartial('index',['arr'=>$data,'pages'=>$pages]);
    }

}
