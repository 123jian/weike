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
                 <a href="index.php?do=user&amp;view=payitem&amp;op=auth" class="selected" original-title="进入认证中心">
                   <div class="icon16 document">icon</div><strong>认证中心</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&amp;view=payitem&amp;op=toolbox" original-title="进入工具箱">
                   <div class="icon16 icon16 box">icon</div><strong>工具箱</strong>
     </a>
             </li>
        </ul>
<!--子导航结束-->
        </nav>
    </div>
</div>
            <div class="show_panel container_24 po_re">
                <div class="prefix_3 grid_21">
                    <div class="panel clearfix box clearfix">
                     <!--header内容头部 start-->
                           <!-- <header class="clearfix box_header">
                                <h2 class="grid_4 alpha omega box_title t_c">认证中心</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                        <ul>
                                                                                 <li >
                                            <a href="index.php?do=user&view=payitem&op=auth&auth_code=email#userCenter" title="邮箱认证信息">邮箱认证</a>
                                        </li>
                                                                                <li >
                                            <a href="index.php?do=user&view=payitem&op=auth&auth_code=realname#userCenter" title="实名认证信息">实名认证</a>
                                        </li>
                                                                                <li >
                                            <a href="index.php?do=user&view=payitem&op=auth&auth_code=mobile#userCenter" title="手机认证信息">手机认证</a>
                                        </li>
                                                                                <li >
                                            <a href="index.php?do=user&view=payitem&op=auth&auth_code=bank#userCenter" title="银行认证信息">银行认证</a>
                                        </li>
                                                                                   
                                        </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>-->
                            <!--header内容头部 end-->
                             <article class="box_detail">
                                <div class="pad20">
                                   <div class="all_authent clearfix">
                                        <dl class="clearfix">
                                            <dt class="font18b c333">安全认证信息</dt>
                                            <dd>
                                                <div class="clearfix">
                                                    <span class="fl_l">
                                                        <img src="data/uploads/sys/auth/mail_1.gif" original-title="">
                                                        <strong class="c333 pl_5"><a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=email#userCenter" title="邮箱认证信息">
                                                        	邮箱认证                                                        </a>
                                                      </strong>
                                                    </span>
                                                    <span class="fl_r">
                                                        <span class="msg ">
                                                        <i></i>
                                                        </span>
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=email#userCenter" class="button">立即认证</a>
                                                        </span>
                                                </div>
                                                <div class="pt_10">
                                                    <p>点击发送，系统将自动发送一封邮件到您的邮箱，
		请在24小时之内点击邮件里的链接进行邮箱验证（24之内有效）</p>
                                                </div>
                                                
                                            </dd>
                                            <dd>
                                                <div class="clearfix">
                                                    <span class="fl_l">
                                                        <img src="data/uploads/sys/auth/realname_1.gif" original-title="">
                                                        <strong class="c333 pl_5"><a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=realname#userCenter" title="实名认证信息">
                                                        	实名认证                                                        </a>
                                                      </strong>
                                                    </span>
                                                    <span class="fl_r">
                                                        <span class="msg ">
                                                        <i></i>
                                                        </span>
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=realname#userCenter" class="button">立即认证</a>
                                                        </span>
                                                </div>
                                                <div class="pt_10">
                                                    <p>用于提升账号的安全性和提高信任度，认证后不能修改</p>
                                                </div>
                                                
                                            </dd>
                                            <dd>
                                                <div class="clearfix">
                                                    <span class="fl_l">
                                                        <img src="data/uploads/sys/auth/phone_1.gif" original-title="">
                                                        <strong class="c333 pl_5"><a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=mobile#userCenter" title="手机认证信息">
                                                        	手机认证                                                        </a>
                                                      </strong>
                                                    </span>
                                                    <span class="fl_r">
                                                        <span class="msg ">
                                                        <i></i>
                                                        </span>
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=mobile#userCenter" class="button">立即认证</a>
                                                        </span>
                                                </div>
                                                <div class="pt_10">
                                                    <p>手机认证后，可使用手机登录、手机找回密码、接收各类重要提醒</p>
                                                </div>
                                                
                                            </dd>
                                            <dd>
                                                <div class="clearfix">
                                                    <span class="fl_l">
                                                        <img src="data/uploads/sys/auth/bank_1.gif" original-title="">
                                                        <strong class="c333 pl_5"><a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=bank#userCenter" title="银行认证信息">
                                                        	银行认证                                                        </a>
                                                      </strong>
                                                    </span>
                                                    <span class="fl_r">
                                                        <span class="msg ">
                                                        <i></i>
                                                        </span>
<a href="index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=bank#userCenter" class="button">立即认证</a>
                                                        </span>
                                                </div>
                                                <div class="pt_10">
                                                    <p>通过银行认证后可将账户中的钱提现到银</p>
                                                </div>
                                                
                                            </dd>
                                          <!--  <dd>
                                                <div class="clearfix">
                                                    <span class="fl_l">
                                                        <img src="">
                                                        <strong class="c333 pl_5">邮箱认证

</strong>
                                                    </span>
                                                    <span class="fl_r">
                                                        <span class="msg msg_ok">
                                                        <i></i>已认证
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="pt_10">
                                                    <p>邮箱认证后，可使用邮箱直接登录，邮箱

找回密码，收到网站最新任务，最新信息等。</p>
                                                </div>
                                                
                                            </dd>
                                            <dd>
                                                <div class="clearfix">
                                                    <span class="fl_l">
                                                        <img src="">
                                                        <strong class="c333 pl_5">手机认证

</strong>
                                                    </span>
                                                    <span class="fl_r">
                                                        <span class="msg msg_error">
                                                        <i></i>未认证
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="pt_10">
                                                    <p>手机认证后，可使用手机登录、手机找回

密码、接收定制一品威客网各类重要提醒。</p>
                                                </div>
                                                
                                            </dd>
                                            <dd>
                                                <div class="clearfix">
                                                    <span class="fl_l">
                                                        <img src="">
                                                        <strong class="c333 pl_5">银行卡认证

</strong>
                                                    </span>
                                                    <span class="fl_r">
                                                        <span class="msg msg_error">
                                                        <i></i>未认证
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="pt_10">
                                                    <p>通过银行认证后可将账户中的钱提现到银

行卡上。</p>
                                                </div>
                                                
                                            </dd>-->
                                        </dl>

                                   </div>
                                </div>
                            </article>
                   
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div></section>
</div>