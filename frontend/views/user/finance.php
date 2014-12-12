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
            <!--用户中心样式-->
<div class="second_menu container_24 po_ab clearfix">
    <div class="suffix_21">
        <nav class="minor_nav box clearfix">
           <!--子导航开始-->
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&amp;view=finance&amp;op=detail" class="selected" original-title="进入账目明细">
                   <div class="icon16 chart-line">icon</div><strong>账目明细</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=finance&amp;op=prom" original-title="进入推广赚钱">
                   <div class="icon16 emotion-smile">icon</div><strong>推广赚钱</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&amp;view=finance&amp;op=recharge" original-title="进入账号充值">
                   <div class="icon16 cur-yen">icon</div><strong>账号充值</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=finance&amp;op=withdraw" original-title="进入账号提现">
                   <div class="icon16 clipboard-copy">icon</div><strong>账号提现</strong>
     </a>
             </li>
        </ul>
<!--子导航结束-->
        </nav>
    </div>
</div>
            <div class="show_panel container_24 po_re">
                <div class="prefix_3 grid_21">
                    <div class="panel clearfix box">
                        <!--main content-->
                        <div class="">
                            <!--header内容头部 start-->
                            <header class="clearfix box_header">
                                <h2 class="grid_4 alpha omega box_title t_c">账户信息</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                        <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 61px; height: 33px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                                                                                        <li class="selectedLava">
                                                <a href="index.php?do=user&amp;view=finance&amp;op=detail&amp;action=account#userCenter" original-title="收支记录统计">账户信息</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=finance&amp;op=detail&amp;action=basic#userCenter" original-title="收支记录统计">收支明细</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=finance&amp;op=detail&amp;action=charge#userCenter" original-title="充值记录统计">充值记录</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=finance&amp;op=detail&amp;action=withdraw#userCenter" original-title="提现记录统计">提现记录</a>
                                            </li>
                                                                                    </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end--><!--detail内容 start-->
                            <article class="box_detail clearfix">
                                <div class="pad20">
                            	<div class="finance_info  pb_20 clearfix">
                                        <dl>
                                            <dt>我的财务信息：</dt>
                                            <dd>用户名：小剑</dd>
                                            <dd>账户可用余额：<span class="cf60"><strong class="font18b mr_5"> ￥0.00元</strong>元</span> </dd>
                                            <dd>
                                                <a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=bank#userCenter">银行卡认证(<span class="cf60">未认证</span>)</a>
                                                <a href="index.php?do=user&amp;view=finance&amp;op=recharge">账户充值</a>
                                                <a href="index.php?do=user&amp;view=finance&amp;op=withdraw">账户提现</a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="security_strength pt_30 pb_30 border_t_c border_b_c clearfix">
                                        <dl>
                                            <dt>资金安全强度：</dt>
                                            <dd>您可以通过以下方式提高资金安全强度：</dd>
                                            <dd> 
                                                <a href="index.php?do=user&amp;view=setting&amp;op=safe&amp;opp=change_password#userCenter">修改密码</a>
                                                <a href="index.php?do=user&amp;view=setting&amp;op=safe&amp;opp=sec_code#userCenter">修改安全密码</a>
                                                <a href="index.php?do=user&amp;view=payitem&amp;op=auth">完善账号安全认证</a></dd>
                                        </dl>

                                    </div>
                                </div>


                            </article>
                            <!--detail内容 end-->
                        </div>
                        <!--main content end -->
                        <div class="clear">
                        </div>
                    </div>
                </div>
                </div></section>
</div>