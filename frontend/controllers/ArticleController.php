<?php

namespace frontend\controllers;
use yii\db\Query;
use yii\data\Pagination; 
use app\models\KekeWitkeyArticle;
use app\models\KekeWitkeyArticleCategory;
class ArticleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=new query();
        $model->from(['keke_witkey_article','keke_witkey_article_category'])->where(
                "keke_witkey_article.art_cat_id=keke_witkey_article_category.art_cat_id")->all();

        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all();
               
        return $this->renderpartial('index',['arr'=>$data,'pages'=>$pages]);
    }
    public function actionSelec()
    {
        $model=new query();
        $model->from(['keke_witkey_article','keke_witkey_article_category'])->where(
                "keke_witkey_article.art_cat_id=keke_witkey_article_category.art_cat_id and art_id=".$_GET['art_id'])->all();

        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all();
               
        return $this->renderpartial('index',['arr'=>$data,'pages'=>$pages]);
    }

}
