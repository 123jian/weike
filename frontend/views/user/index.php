<script type="text/javascript" src="tpl/default/js/jq.js"></script>
<script>
function getUrlParam(name)
{
var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
var r = window.location.search.substr(1).match(reg);  //匹配目标参数
if (r!=null) return unescape(r[2]); return null; //返回参数值
}
var key=getUrlParam('stut');
$("#"+key).attr("class","selected")


</script>
<div class="container_24">
    <section class="clearfix section">		   
<div class="grid_6 mb_10">
<div class="box default">
<div class="inner">
<div class="user_info_con clearfix pt_10 pb_5 pl_10">
<a href="index.php?do=space&amp;member_id=11" class="fl_l mt_5" title="小剑"><img src="http://localhost/weike/data/avatar/default/man_small.jpg" uid="11" class="pic_small" original-title=""></a>	
<div class="grid_4 clearfix pl_5 omega">
<ul class="font14">
<li><a href="index.php?do=space&amp;member_id=11" class="font14b">小剑</a></li>
<li>用户等级：<img src="data/uploads/sys/mark/309044f3b07ef87c95.gif?fid=2067" align="absmiddle" original-title="头衔 ：一级威客
能力值：0
等级：1"></li>
<li>能力值：0</li>
<li>信誉值：0</li>
<li>
<div class="font14 auth">
认证信息：<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=email#userCenter"><img class="mar0" src="data/uploads/sys/auth/mail_0.gif" width="16px" height="16px" alt="" original-title="邮箱认证"></a>
	
					
			
					
			
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=realname#userCenter"><img class="mar0" src="data/uploads/sys/auth/realname_0.gif" width="16px" height="16px" alt="" original-title="实名认证"></a>
	
					
			
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=mobile#userCenter"><img class="mar0" src="data/uploads/sys/auth/phone_0.gif" width="16px" height="16px" alt="" original-title="手机认证"></a>
	
					
			
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=bank#userCenter"><img class="mar0" src="data/uploads/sys/auth/bank_0.gif" width="16px" height="16px" alt="" original-title="银行认证"></a>
	
					
			
</div>
</li>
</ul>
</div>
<div class="clear"></div>
<div class="c333">上次登录时间：2014-12-09 09:46:55</div>
</div>
</div>
</div>		



  <!--账户余额-->
<div class="box default mt_10">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">账户余额</h2>
</header>
<div class="box_detail">
<div class="font14">
 现金：<a class="font12">￥0.00元</a>
</div>
<div class="font14">
元宝：<a class="font12">0.000</a>
</div>
<div class=" mt_10 mb_20 t_c">
<a href="index.php?do=user&amp;view=finance&amp;op=recharge" class="button btn_width mr_5" title="充值">充值</a>
<a href="index.php?do=user&amp;view=finance&amp;op=withdraw" class="button btn_width" title="提现">提现</a>
</div>
</div>	
</div>
</div>
<!--end 账户余额-->

<!--账户安全信息-->
<div class="box default mt_10">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">账号安全信息</h2>
</header>
<div class="box_detail clearfix">

<!--安全设置-->

<div class="t_c pb_20">
<a class="button btn_width mr_5 mt_5" href="index.php?do=user&amp;view=setting&amp;op=safe">修改密码</a>
<a class="button btn_width mt_5" href="index.php?do=user&amp;view=setting&amp;op=safe&amp;opp=sec_code">修改安全码</a>	

<div class="mt_5">											
<a class="button btn_width mr_5 mt_5" href="index.php?do=user&amp;view=setting&amp;op=basic">完善资料</a>										
<a class="button btn_width mt_5" href="index.php?do=user&amp;view=payitem&amp;op=auth">认证中心</a>
</div>
</div>


</div>	
</div>
</div>
<!--end 账户安全信息-->

<!--快捷导航-->
<div class="box default mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">快捷导航</h2>
</header>
<div class="mb_20 t_c">
<a href="index.php?do=release" class="button btn_width mr_5" title="发布任务">发布任务</a>
<a href="index.php?do=task_list" class="button btn_width" title="参加任务">参加任务</a>
<a href="index.php?do=shop_release" class="button btn_width mr_5 mt_10" title="出售商品">出售商品</a>
<a href="index.php?do=shop_list" class="button btn_width mt_10" title="购买商品">购买商品</a>
<a href="index.php?do=user&amp;view=setting&amp;op=space" class="button btn_width mr_5 mt_10" title="店铺设置">店铺设置</a>
<a href="index.php?do=space&amp;member_id=11" class="button btn_width mt_10" title="进入店铺">进入店铺</a>
</div>
</div>	
</div>
<!--end 快捷导航-->

<!--公告栏 -->
<div class="box default mt_10 hidden">
<div class="inner">
        	<div class="pb_20">
         <!--公告头部-->
         <header class="box_header clearfix">
          	<nav class="box_nav clearfix">
               <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 0px; height: 23px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                  <li id="ul_plac_1" onclick="swaptab('plac','backLava','',3,1)" class="selectedLava"><a href="javascript:void(0);" original-title="公告">网站资讯</a></li>
                  <li id="ul_plac_2" onclick="swaptab('plac','backLava','',3,2,{ajax:1,url:'index.php?do=user&amp;view=index&amp;ajax=bid_notice'})"><a href="javascript:void(0);" original-title="中标通知">中标通知</a></li>
                  <li id="ul_plac_3" onclick="swaptab('plac','backLava','',3,3,{ajax:1,url:'index.php?do=user&amp;view=index&amp;ajax=withdraw'})"><a href="javascript:void(0);" original-title="提现公告">提现公告</a></li>
                 <!-- <li id="ul_plac_4" onclick="swaptab('plac','backLava','',4,4,{ajax:1,url:'index.php?do=user&view=index&ajax=safe'})"><a href="javascript:void(0);" title="安全">安全</a></li>-->
               </ul>
            </nav>
            <div class="clear"></div>
         </header>
        <!--end 公告头部 -->
                            
        <!--公告detail内容-->
         <article class="box_detail" id="div_plac_1">
           <ul class="smaller_list">
              <li><a href="index.php?do=article&amp;view=article_info&amp;art_id=239">联系我们</a></li>
 <li><a href="index.php?do=article&amp;view=article_info&amp;art_id=240">联系方式</a></li>
 <li><a href="index.php?do=article&amp;view=article_info&amp;art_id=230">客户如何保障帐户安全</a></li>
 <li><a href="index.php?do=article&amp;view=article_info&amp;art_id=250">中金香港直销Facebook股权：初定100万股门槛</a></li>
            </ul>
         </article>
        <article class="box_detail" id="div_plac_2" style="display:none;">
        </article>
        <article class="box_detail" id="div_plac_3" style="display:none;">
        </article>
       
        <!--end 公告detail内容-->
</div>
</div>
</div>
<!--end 公告栏 -->

<!--新手指南-->
<div class="box default mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">新手指南</h2>
</header>
<div class="box_detail clearfix">
<ul class="smaller_list pb_10">
<li><a href="index.php?do=help&amp;fpid=294&amp;spid=297#pageTop"><span>充值流程</span></a></li>
<li><a href="index.php?do=help&amp;fpid=294&amp;spid=298#pageTop"><span>注册流程</span></a></li>
<li><a href="index.php?do=help&amp;fpid=294&amp;spid=298#pageTop"><span>什么是验证码？</span></a></li>
</ul>
<a href="index.php?do=help" class="button mb_10 block t_c" title="进入帮助中心">进入帮助中心</a>
</div>	
</div>
</div>
<!--end 新手指南-->

</div>

<div class="grid_18 mb_10 omega">
<!--用户信息-->
<div class="box default hidden">
<div class="inner">
<div class="user_info_con clearfix pt_10 pb_5 pl_10 pr_10">
    				<a href="index.php?do=space&amp;member_id=11" class="fl_l" title="小剑"><img src="http://localhost/weike/data/avatar/default/man_small.jpg" uid="11" class="pic_small" original-title=""></a>							
<div class="grid_7 pl_10">
<ul class="font14">
<li><a href="index.php?do=space&amp;member_id=11" class="font14b">小剑</a></li>
<li>用户等级：<img src="data/uploads/sys/mark/309044f3b07ef87c95.gif?fid=2067" align="absmiddle" original-title="头衔 ：一级威客
能力值：0
等级：1"></li>
<li>能力值：0</li>
<li>信誉值：0</li>
<li>上次登录时间：2014-12-09 09:46:55</li>
</ul>
</div>
<div class="fl_l mt_10">
<div class="font14 auth">
认证信息：<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=email#userCenter"><img src="data/uploads/sys/auth/mail_0.gif" alt="" original-title="邮箱认证"></a>
	
								
								
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=realname#userCenter"><img src="data/uploads/sys/auth/realname_0.gif" alt="" original-title="实名认证"></a>
	
								
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=mobile#userCenter"><img src="data/uploads/sys/auth/phone_0.gif" alt="" original-title="手机认证"></a>
	
								
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=bank#userCenter"><img src="data/uploads/sys/auth/bank_0.gif" alt="" original-title="银行认证"></a>
	
								

</div>
<ul class="trading mt_20">
 <li>
任务交易提醒：<span><a href="index.php?do=user&amp;view=employer&amp;op=task">待付款()</a></span>|
<span><a href="index.php?do=user&amp;view=employer&amp;op=task">待选稿()</a></span>
 </li>
<li>
商品交易提醒：<span><a href="index.php?do=user&amp;view=finance&amp;op=order&amp;obj_type=service">待付款()</a></span>|
<span><a href="index.php?do=user&amp;view=finance&amp;op=order&amp;obj_type=service">待确认打款()</a></span>
</li>
</ul>
</div>
</div>
</div>
    </div>
<!--end 用户信息-->

<!--工具箱-->
<div class="box default model_bord mt_10 hidden">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title">工具箱</h2>
</header>
<div class="box_detail po_re">
<div class="pt_10 pb_5">
<div class="toolbox clearfix">
<ul>
<li>
<a href="index.php?do=user&amp;view=payitem&amp;op=toolbox&amp;show=buy&amp;item_code=urgent#userCenter">
<img src="" alt="任务加急" width="48" height="48" original-title="任务加急">
<div>任务加急</div>
</a>	
</li>		
							
<li>
<a href="index.php?do=user&amp;view=payitem&amp;op=toolbox&amp;show=buy&amp;item_code=top#userCenter">
<img src="" alt="任务置顶" width="48" height="48" original-title="任务置顶">
<div>任务置顶</div>
</a>	
</li>		
							
<li>
<a href="index.php?do=user&amp;view=payitem&amp;op=toolbox&amp;show=buy&amp;item_code=workhide#userCenter">
<img src="" alt="稿件隐藏" width="48" height="48" original-title="稿件隐藏">
<div>稿件隐藏</div>
</a>	
</li>		
							
<li>
<a href="index.php?do=user&amp;view=payitem&amp;op=toolbox&amp;show=buy&amp;item_code=map#userCenter">
<img src="" alt="标记地图" width="48" height="48" original-title="标记地图">
<div>标记地图</div>
</a>	
</li>		
							
	
</ul>
</div>
</div>
</div>
</div>
</div>
   		<!--end 工具箱 -->

<!--雇主交易面板-->
<div class="box default model_bord ">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title grid_3">雇主交易面板</h2>
<nav class="box_nav clearfix grid_7">
<ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 78px; height: 33px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
<li class="selectedLava"><a href="javascript:void(0);" onclick="swaptab('pub','backLava','',2,1);show_none('more1','more2');" original-title="">任务管理[0]</a></li>
<li><a href="javascript:void(0);" onclick="swaptab('pub','backLava','',2,2);show_none('more2','more1');" original-title="">商品交易[0]</a></li>
</ul>
</nav>	
    					<a id="more1" class="pt_5 fl_r" href="http://localhost/weike/index.php?do=user&amp;view=employer">更多雇主交易<span class="font_simsun">&gt;&gt;</span></a>


    					<a id="more2" style="display:none;" class="pt_5 fl_r" href="http://localhost/weike/index.php?do=user&amp;view=employer&amp;op=shop">更多雇主交易<span class="font_simsun">&gt;&gt;</span></a>

</header>
<div class="box_detail pad0" id="div_pub_1">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>任务编号</li>
<li>任务类型</li>
                        <li class="w2 t_l">任务标题</li>
                        <li class="w2">任务赏金</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
   
   <dd class="clearfix odd">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
                  </dl>
            </div>
</div>
<div class="box_detail pad0" id="div_pub_2" style="display:none;">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>商品编号</li>
<li>商品类型</li>
                        <li class="w2 t_l">商品名称</li>
                        <li class="w2">商品价格</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
    	<dd class="clearfix odd">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
  
  							  
                </dl>
            </div>
</div>
</div>
</div>
   		<!--end 雇主交易面板-->

<!--威客交易面板-->
<div class="box default model_bord mt_10 ">
<div class="inner">
<header class="box_header clearfix">
<h2 class="title grid_3">威客交易面板</h2>
<nav class="box_nav clearfix grid_7">
<ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 78px; height: 33px; overflow: hidden;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
<li class="selectedLava"><a href="javascript:void(0);" onclick="swaptab('join','backLava','',2,1);show_none('more3','more4');" original-title="">任务管理[0]</a></li>
<li><a href="javascript:void(0);" onclick="swaptab('join','backLava','',2,2);show_none('more4','more3');" original-title="">商品交易[0]</a></li>
</ul>
</nav>

<a id="more3" class="pt_5 fl_r" href="index.php?do=user&amp;view=witkey">更多威客交易<span class="font_simsun">&gt;&gt;</span></a>
<a id="more4" style="display:none" class="pt_5 fl_r" href="index.php?do=user&amp;view=witkey&amp;op=shop">更多威客交易<span class="font_simsun">&gt;&gt;</span></a>

</header>
<div class="box_detail pad0" id="div_join_1">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>任务编号</li>
<li>订单类型</li>
                        <li class="w2 t_l">任务标题</li>
                        <li class="w2">任务赏金</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
    	<dd class="clearfix odd">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
  
                  </dl>
            </div>
</div>
<div class="box_detail pad0" id="div_join_2" style="display:none;">
<div class="list">
                <dl>
                  <dt>雇主交易</dt>
                  <dd class="tags">
                    <ul>
                        <li>商品编号</li>
<li>订单类型</li>
                        <li class="w2 t_l">商品名称</li>
                        <li class="w2">商品价格</li>
                        <li>发布时间</li>
                        <li class="w2">交易状态</li>
<li>交易操作</li>
                    </ul>
                  </dd>
  
      <dd class="clearfix odd">
   	 <ul>				                    	
                        <li class="t_c w0">	暂无记录</li>
</ul>
   	  </dd>
  
  
  								  
                </dl>
            </div>
</div>

</div>
</div>
   		<!--end 威客交易面板-->

   </div>
</section>
</div>