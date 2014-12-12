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
                 <a href="index.php?do=user&amp;view=message&amp;op=send" original-title="进入写短信">
                   <div class="icon16 doc-edit">icon</div><strong>写短信</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&amp;view=message&amp;op=inbox" class="selected" original-title="进入收件箱">
                   <div class="icon16 contact-card">icon</div><strong>收件箱</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=message&amp;op=output" original-title="进入发件箱">
                   <div class="icon16 cc">icon</div><strong>发件箱</strong>
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
                                <h2 class="grid_4 alpha omega box_title t_c">收件箱</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                        <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 78px; height: 33px; overflow: hidden;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                                            <li class="selectedLava">
                                                <a href="index.php?do=user&amp;view=message&amp;op=inbox&amp;msg_type=system" original-title="系统消息">系统消息(0)</a>
                                            </li>
 <li>
                                                <a href="index.php?do=user&amp;view=message&amp;op=inbox&amp;msg_type=accept" original-title="私人短信">私人短信(0)</a>
                                            </li>
 <li>
                                                <a href="index.php?do=user&amp;view=message&amp;op=output&amp;msg_type=output" original-title="私人短信">已发短信(0)</a>
                                            </li>
 <li>
                                                <a href="index.php?do=user&amp;view=message&amp;op=send&amp;msg_type=write" original-title="私人短信">写短信</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end-->
                            <div class="data_list mar10" style="margin-bottom:0;">
                                <form method="post" id="frm_msg" action="index.php?do=user&amp;view=message&amp;msg_type=system">
                                	<input type="hidden" name="op" value="inbox" id="op" original-title="">
                                	<input type="hidden" name="page" value="1" id="page" original-title="">	
                                    <table class="data_table">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                  状态                                                </th>
                                                <th scope="col" colspan="3" width="250">
                                                    标题                                                </th>
                                                <th scope="col">
                                                     发件人                                                </th>
                                                <th scope="col">
                                                     时　间                                                </th>
                                                <th scope="col" colspan="1" width="120">
                                                    操作                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr class="">	
<td colspan="8" class="t_c">
暂无记录</td> 
</tr>
                           </tbody></table>
                         </form>
                       </div>
                     <div class="page"><div class="clear"></div></div>
                   </div>
                 <!--main content end -->
              <div class="clear"></div>
           </div>
         </div>
       </div></section>
</div>