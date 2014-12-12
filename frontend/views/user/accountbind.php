
<script type="text/javascript" src="tpl/default/js/jq.js"></script>
<script>
function getUrlParam(name)
{
var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
var r = window.location.search.substr(1).match(reg);  //匹配目标参数
if (r!=null) return unescape(r[2]); return null; //返回参数值
}
var key=getUrlParam('view');
$("#"+key).attr("class","selected")


</script>

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


        <div class="show_panel container_24 po_re">
        <div class="prefix_3 grid_21">
            <div class="panel clearfix box">
                <!--main content-->
                <div class="">
                    <!--header内容头部 start-->
                    <header class="clearfix box_header">
                        <h2 class="grid_4 alpha omega box_title t_c">账号绑定</h2>
                        <div class="grid_17 alpha omega">
                            <nav class="box_nav">
                                <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 88px; height: 33px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                                    <li class="selectedLava">
                                        <a href="#userCenter" original-title="小剑">当前账号:<?php
use yii\web\Session;
 $session = new Session;
echo $session->get('name');
?></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clear">
                        </div>
                    </header>
                    <!--header内容头部 end--><!--detail内容 start-->
                    <article class="box_detail">
                        <!--messages消息 start-->
                        <div class="messages m_infor clearfix">
                            <span class="icon16 fl_l">info</span>
                            可以使用多个帐号进行登录。 <a href="###" class="close">×</a>
                        </div>
                        <!--messages消息 end-->
                        <div class="prefix_4 suffix_4">
                            <div class="form_box pad10 box">
                                <ul id="list">                                                                        <li class="border_b_c clearfix pt_20 pb_20">
                                        <span class="grid_5"><img class="fl_l" src="resource/img/ico/ico_32_sina.gif" original-title=""><span class="fl_l mt_5 ml_5">新浪微博</span></span>
                                        <span class="grid_4 t_c"><span class="c369">未链接</span> </span>
                                                                                <button class="grid_3 alpha omega" type="button" onclick="location.href='index.php?do=user&amp;view=setting&amp;op=account_bind&amp;ac=bind&amp;type=sina'" value="开始绑定" name="">
                                            开始绑定                                        </button>
                                                                            </li>
                                    <li class="border_b_c clearfix pt_20 pb_20">
                                        <span class="grid_5"><img class="fl_l" src="resource/img/ico/ico_32_ten.gif" original-title=""><span class="fl_l mt_5 ml_5">腾讯微博</span></span>
                                        <span class="grid_4 t_c"><span class="c369">未链接</span> </span>
                                                                                <button class="grid_3 alpha omega" type="button" onclick="location.href='index.php?do=user&amp;view=setting&amp;op=account_bind&amp;ac=bind&amp;type=ten'" value="开始绑定" name="">
                                            开始绑定                                        </button>
                                                                            </li>
                                    <li class="border_b_c clearfix pt_20 pb_20">
                                        <span class="grid_5"><img class="fl_l" src="resource/img/ico/ico_32_qq.gif" original-title=""><span class="fl_l mt_5 ml_5">QQ账号</span></span>
                                        <span class="grid_4 t_c"><span class="c369">未链接</span> </span>
                                                                                <button class="grid_3 alpha omega" type="button" onclick="location.href='index.php?do=user&amp;view=setting&amp;op=account_bind&amp;ac=bind&amp;type=qq'" value="开始绑定" name="">
                                            开始绑定                                        </button>
                                                                            </li>
                                    <li class="border_b_c clearfix pt_20 pb_20">
                                        <span class="grid_5"><img class="fl_l" src="resource/img/ico/ico_32_taobao.gif" original-title=""><span class="fl_l mt_5 ml_5">淘宝</span></span>
                                        <span class="grid_4 t_c"><span class="c369">未链接</span> </span>
                                                                                <button class="grid_3 alpha omega" type="button" onclick="location.href='index.php?do=user&amp;view=setting&amp;op=account_bind&amp;ac=bind&amp;type=taobao'" value="开始绑定" name="">
                                            开始绑定                                        </button>
                                                                            </li>
                                    <li class="border_b_c clearfix pt_20 pb_20" style="border-bottom-width: 0px;">
                                        <span class="grid_5"><img class="fl_l" src="resource/img/ico/ico_32_sohu.gif" original-title=""><span class="fl_l mt_5 ml_5">搜狐微博</span></span>
                                        <span class="grid_4 t_c"><span class="c369">未链接</span> </span>
                                                                                <button class="grid_3 alpha omega" type="button" onclick="location.href='index.php?do=user&amp;view=setting&amp;op=account_bind&amp;ac=bind&amp;type=sohu'" value="开始绑定" name="">
                                            开始绑定                                        </button>
                                                                            </li>
                                </ul>
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