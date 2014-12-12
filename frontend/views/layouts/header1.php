
<?php 
use yii\widgets\AreaDecorator;
AreaDecorator::begin(['viewFile'=>'@app/views/layouts/header.php'])?>

  <?php 
 header("content-type:text/html;charset=utf-8");
 
  use yii\widgets\Block;
  Block::begin(['id' =>'content']);?>
    <div class="main_column">
      <?= $content ?>
    </div>
  <?php Block::end();?>

   <?php Block::begin(['id' =>'footer']);?>
<div class="container_24">
    <header class="page_title clearfix  Anchor">
    <div class="grid_17">
        <h2 class="title pt_5">用户中心</h2>
    </div>
    <div class="grid_7 hidden">
        <div class="user_info">
            <div class="fl_l mr_10">
                <p>
                    <img src='http://localhost/weike/data/avatar/default/man_small.jpg' uid='11' class='pic_small'>                </p>
            </div>
            <ul class="intor">
                <li>
                    欢迎您，<?php
use yii\web\Session;
 $session = new Session;
$session->get('name');

?>                </li>
                <li>
                    <strong class="cf60">币种0.000</strong>
                   现金 | <strong><a href="index.php?do=user&view=message">0 条消息</a></strong>
                </li>
            </ul>
        </div>
    </div>
</header>
    
<div class="grid_24">
<nav class="primary_nav box clearfix">

    <a name="userCenter"></a>
    <ul>
                <li>
            <a href="index.php?r=user&stut=user" id="user" class=""><span class="icon32 meter">管理面板</span><em>管理面板</em></a>
        </li>
                <li>
            <a href="index.php?r=user/setting&stut=setting" id="setting" class="" ><span class="icon32 cog">个人设置</span><em>个人设置</em></a>
        </li>
                <li>
            <a href="index.php?r=user/finance&stut=finance" id="finance" class=""  ><span class="icon32 chart-line2">财务管理</span><em>财务管理</em></a>
        </li>
                <li>
            <a href="index.php?r=user/employer&stut=employer" id="employer" class="" ><span class="icon32 buyer">雇主|买家</span><em>雇主|买家</em></a>
        </li>
                <li>
            <a href="index.php?r=user/witkey&stut=witkey" id="witkey" class=""  ><span class="icon32 seller">威客|卖家</span><em>威客|卖家</em></a>
        </li>
                <li>
            <a href="index.php?r=user/message&stut=message" id="message" class="" ><span class="icon32 sound-high">消息管理</span><em>消息管理</em></a>
        </li>
                <li>
            <a href="index.php?r=user/collect&stut=collect" id="collect" class=""  ><span class="icon32 star-fav">我的收藏</span><em>我的收藏</em></a>
        </li>
                <li>
            <a href="index.php?r=user/payitem&stut=payitem" id="payitem" class=""  ><span class="icon32 bookmark-2">增值服务</span><em>增值服务</em></a>
        </li>
            </ul>
    
    
</nav>

</div>
<div class="clear"></div>
</div>
  <?php Block::end();?>
<?php Block::begin(['id' =>'setting']);?>
    <div class="container_24">
    <section class="clearfix section">
            <!--用户中心样式-->
<div class="second_menu container_24 po_ab clearfix">
    <div class="suffix_21">
        <nav class="minor_nav box clearfix">
           <!--子导航开始-->
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/setting&stut=setting&view=setting" id="setting" class="" original-title="进入基本资料">
                   <div class="icon16 contact-card">icon</div><strong>基本资料</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?r=user/picture&stut=setting&view=picture" id="picture" class="" original-title="进入头像设置">
                   <div class="icon16 picture">icon</div><strong>头像设置</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/safe&stut=setting&view=safe" id="safe" class="" original-title="进入安全设置">
                   <div class="icon16 shield">icon</div><strong>安全设置</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/accountbind&stut=setting&view=accountbind" id="accountbind" class="" original-title="进入账号绑定">
                   <div class="icon16 openid">icon</div><strong>账号绑定</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?r=user/space&stut=setting&view=space" id="space" class="" original-title="进入店铺设置">
                   <div class="icon16 browser">icon</div><strong>店铺设置</strong>
     </a>
             </li>
        </ul>
<!--子导航结束-->
        </nav>
    </div>
</div> 
  <?php Block::end();?>

<?php AreaDecorator::end();?>