<script type="text/javascript" src="tpl/default/js/jq.js"></script>
<script>
function getUrlParam(name)
{
var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
var r = window.location.search.substr(1).match(reg);  //匹配目标参数
if (r!=null) return unescape(r[2]); return null; //返回参数值
}
var key=getUrlParam('kk');
$("#"+key).attr("class","selected")


</script>
<div class="wrapper">
 	<div class="container_24 clearfix">
<div class="mt_30 mb_30">
<div class="grid_20 clearfix">
<div class="simple_step clearfix all_4">
        <div class="step step1"> </div>
        <div class="step step2">
        <div class="get_code">
         获取推广代码
   		</div>
       </div>
        <div class="step step3">
            <div class="get_sys">
               推广客客专业威客系统
   			</div>
        </div>
        <div class="step step4">
            <div>
              获得丰厚收益
   			</div>
        </div>
                	
</div>

            <div class="prom_border box mt_10 mb_10 clearfix">
            	
<div class="box_header">
            	<div class="inner">
            		<h2 class="title">新手任务：邀请好友注册，赚取第一笔佣金</h2>
            	</div>
            </div>
<div class="prom_detail border_t_c">
            	<div class="pad20">
            		<div class="rowElem clearfix ">
            			<label class="grid_2 t_c pt_10"><img src="tpl/default/img/style/zhu.png"></label>
            			<div class="grid_15">
            				<div>成功推荐会员注册，并通过 <a href="index.php?do=auth">企业认证</a> ，获得<span class="cf60">￥3.00元</span> 元和<span class="cf60">￥3.00元</span> 代金券提成
            				</div>
            				<div class="font14b cf60">你的收益＝注册会员数×￥3.00元 
            				</div>
            				<div>
            					用户通过推广链接\代码注册成为会员，并通过 <a href="index.php?do=user&view=payitem&op=auth&auth_code=enterprise_auth#userCenter">企业认证</a> ，推广员就能获得<span class="cf60">￥3.00元</span>的提成。在20天，您所推广的下线在网站上交易还有奖励。
            					
            				</div>
            				<div> <span class="font14b cf60">比如：</span> 推荐100名会员注册并通过实名认证，您能获得现金提成<span class="cf60">100</span>元+<span class="cf60">100</span>代金券！</div>
            			</div>
</div>
            		<div class="rowElem clearfix ">
            			<label class="grid_2 t_r"><strong class="title">方法一：</strong></label>
            			<div class="">
            				复制以下邀请链接，通过QQ、微博私信等发送给你的亲朋好友。
            			</div>
            		</div>
            		<div class="rowElem clearfix ">
            			请您先<a href="index.php?do=login">登录</a>,再查看链接
</div>
            		<div class="rowElem clearfix ">
            			<label class="grid_2 t_r"><strong class="title">方法二：</strong></label>
            			<div class="">
            				将内容分享到论坛、个人签名、人人网、QQ个人空间等。
            			</div>
            		</div>
            		<div class="rowElem clearfix ">
            			请您先<a href="index.php?do=login">登录</a>,再查看链接
</div>
            		
</div>
            </div>
        	</div>
        	<div class="prom_border box mt_10 mb_10 clearfix">
        		<div class="box_header">
            	<div class="inner">
            		<h2 class="title">新手任务：邀请好友发布任务</h2>
            	</div>
            </div>
            <div class="prom_detail border_t_c">
            	<div class="pad20">
            		<div class="rowElem clearfix ">
            			<label class="grid_2 t_c pt_10"><img src="tpl/default/img/style/fa.png"></label>
            			<div class="grid_15">
            				<div>
            					邀请好友发布任务，任务成功结束后，可一次性获得<span class="cf60">￥4.00元</span> 推广金
            				</div>
            				<div class="fontb cf60">
            					你的收益=￥4.00元 +￥4.00元代金劵
            				
            				</div>
            				<div>
            					用户通过推广链接\代码邀请好友发布任务，任务成功结束即为推广有效，推广员就能获得<span class="cf60">￥4.00元+￥4.00元</span>代金券推广提成。
            				</div>
            				<div> <span class="fontb cf60">比如：</span> 邀请好友发布了任务，任务结束后你能立刻获得
            					<span class="cf60">￥4.00元+￥4.00元代金券！</span></div>
            			</div>
</div>
            		
            	<div class="rowElem clearfix ">
            			<label class="grid_2 t_r"><strong class="title">呈现方式：</strong></label>
            			<div class="">
            				<span class="mr_10"><input type="radio" name="linkMode" id="linkMode1" value="1" checked="checked">原始链接</span>
            									<input type="radio" name="linkMode" id="linkMode2" value="2">文字链接
            			</div>
            	</div>
            	<div class="rowElem clearfix ">
            		请您先<a href="index.php?do=login">登录</a>,再查看链接
</div>

</div>
        		</div>
</div>
</div>
<div class="grid_4 clearfix">
<div class="prom_border box  mb_10 clearfix">
<div class="box_header backLava">
            	<div class="inner">
            		<strong class="title">赚钱工具</strong>
            		<p class="pl_10">选择你习惯的推广方式</p>
            	</div>
            </div>
            <div class="prom_detail clearfix">
            	<div class="prom_list">
            	<ul>
            	<li> <a href="index.php?do=prom"  class="selected">新手任务</a></li>
            	<li> <a href="index.php?do=prom&view=task" >任务推广</a></li>
            	<li> <a href="index.php?do=prom&view=good" >商品推广</a></li>
            	</ul>
</div>
            </div>
        </div>
        <div class="prom_border box  mb_10 clearfix">
        	<div class="box_header border_b_c">
            	<div class="inner">
            		<h2 class="title">推广动态</h2>
</div>
            </div>
            <div class="prom_detail">
            <div class="pl_10 pr_10 pb_10">
            	<div class="prom_rel">
            	<ul>
            		暂时还没有动态
            	</ul>
            	</div>
            </div>
        	</div>
        </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
//新手任务：邀请好友注册，赚取第一笔佣金
 function copytext(i){
       if(check_user_login()){
setCopy($("#" + i).val(),'复制成功');
}
    }
//新手任务：邀请好友发布任务
var link_pub = "http://127.0.0.1/weike/index.php?do=prom&u=&p=reg&p=pub_task&l=release";
var link_pub_code = "<a href=http://127.0.0.1/weike/index.php?do=prom&u=&p=reg&p=pub_task&l=release target=_blank>客客出品专业威客系统</a>";
$("#linkMode1").click(function(){
$("#prompub").val(link_pub);
})
$("#linkMode2").click(function(){
$("#prompub").val(link_pub_code);
})
</script>

<!--页脚 satrt-->
