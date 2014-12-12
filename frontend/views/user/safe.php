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
                        <h2 class="grid_4 alpha omega box_title t_c">安全设置</h2>
                        <div class="grid_17 alpha omega">
          <nav class="box_nav">
           <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 61px; height: 33px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                            <li class="selectedLava">
                   <a href="index.php?do=user&amp;view=setting&amp;op=safe&amp;opp=change_password#userCenter" original-title="更改密码">更改密码</a>
               </li>
                            <li>
                   <a href="index.php?do=user&amp;view=setting&amp;op=safe&amp;opp=sec_code#userCenter" original-title="更改安全码">安全密码</a>
               </li>
                        </ul>
          </nav>
        </div>
                    </header>
                    <!--header内容头部 end-->

<!--detail内容 start-->
                    <article class="box_detail">
                        <div class="messages m_warn clearfix">
                            <span class="icon16 fl_l"></span>
                            密码变更：在进行操作同时，请牢记自己的新密码！<a href="###" class="close">×</a>
                        </div>
                        <div class=" prefix_1 suffix_1">
                            <div class="box waring  form_box">
                            	<div class="inner">
                                <form action="index.php?r=user/uppwd" method="post" >
                                    <div class="rowElem clearfix">
                                        <label class="grid_4">
                                            当前密码：                                        </label>
                                        <div class="grid_11">
                                            <input class="txt_input" type="password" size="40" name="old_password" id="old_password" limit="required:true" msg="输入原密码" msgarea="span_old" original-title="输入原密码"><span id="span_old"></span>
                                        </div>
                                    </div>
                                    <div class="rowElem clearfix">
                                        <label class="grid_4">
                                            新密码：                                        </label>
                                        <div class="grid_11">
                                            <input class="txt_input" type="password" size="40" name="new_password" id="new_password" limit="required:true;len:6-15" msg="密码输入错误" msgarea="span_new" original-title="请输入6-15位新密码"><span id="span_new"></span>
                                        </div>
                                    </div>
                                    <div class="rowElem clearfix">
                                        <label class="grid_4">
                                            确认密码：                                        </label>
                                        <div class="grid_11">
                                            <input class="txt_input" type="password" size="40" name="new_equal" id="new_equal" limit="required:true;equals:new_password" msg="确认密码输入有误" msgarea="span_new_equal" original-title="确认新密码"><span id="span_new_equal"></span>
                                        </div>
                                    </div>
                                    <div class="rowElem clearfix form_button">
                                        <div class="grid_8">
                                            &nbsp;
                                        </div>
                                        <div class="grid_10 t_l">
                                            <button class="grid_2 alpha" type="submit" value="提交">
                                                提交                                            </button>
                                        </div>
                                    </div>
                                </form>
</div>
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