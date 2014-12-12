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
                                <h2 class="grid_4 alpha omega box_title t_c">基本资料</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                        <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 61px; height: 33px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                                                                                        <li class="selectedLava">
                                                <a href="index.php?do=user&amp;view=setting&amp;op=basic&amp;opp=basic#userCenter" original-title="">基本资料</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=setting&amp;op=basic&amp;opp=contact#userCenter" original-title="">联系方式</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=setting&amp;op=basic&amp;opp=skill#userCenter" original-title="">威客技能</a>
                                            </li>
                                                                                    </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end-->
                            <div class="step_progress clearfix">
                                
                                <div class="messages m_infor">
                                     <div class="icon16">warning</div>
                                         站长建议：首次注册用户请选择您的身份，用户身份是您对外展示用户信息和开通店铺的重要向导，请谨慎填写！                                     <a href="###" class="close">×</a>
                               </div>
 
                            </div>
                            <div class="prefix_1 suffix_1">
                                <div class="clearfix box font14">
                                    <!--from表单 start-->
                                    <form action="index.php?do=user&amp;view=setting&amp;op=basic&amp;opp=basic" method="post" id="frm" name="frm">
                                    	<input type="hidden" name="formhash" id="formhash" value="ffb18b" original-title="">
                                        <input type="hidden" name="from" value="" original-title="">
<input type="hidden" name="max" id="max" value="1999-12-13" original-title="">
                     <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	用户类型：                                            </label>
                    <div class="fl_l ml_5">
<input type="radio" name="conf[user_type]" value="1" checked="checked" id="type_1" original-title="">个人<input type="radio" name="conf[user_type]" value="2" id="type_2" original-title="">企业                    </div>									
                                        </div>
                     <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	所属行业：                                            </label>
                    <div class="fl_l ml_5">
                        <select name="conf[indus_pid]" id="indus_pid" title="选择行业" onchange="showIndus(this.value)" limit="required:true;between:5-10" msg="行业没有选择" msgarea="span_indus">
                            <option value="">选择行业</option>
                      		 <option value="441">品牌设计</option>
 <option value="2">网站开发</option>
 <option value="201">创意祝福</option>
 <option value="249">网游服务</option>
 <option value="3">文案写作</option>
 <option value="335">建筑/装修</option>
 <option value="211">头脑风暴</option>
 <option value="350">照片美化/编辑</option>
 <option value="234">法律服务</option>
 <option value="160">起名取名</option>
 <option value="357">影视/配音/歌词</option>
 <option value="192">生活服务</option>
 <option value="218">移动应用</option>
 <option value="240">招聘找人</option>
 <option value="121">软件开发</option>
 </select>
 
                    </div>
                    <div class="fl_l" id="reload_indus">
                        <select name="conf[indus_id]" id="indus_id" limit="required:true;between:5-10" msg="没有选择子行业" title="请选择子行业" msgarea="span_indus">
                            <option value="">请选择子行业</option>
                        </select>
                    </div>	
<span id="span_indus"></span>								
                                        </div>
			
<div id="single"><!--个人-->

                                        <div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                            	<span id="na_1">真实姓名</span>
                                            	<span id="na_2" class="hidden">联系人</span>
                                                ：                                            </label>
                                            <div class="grid_9 ">
                                                <input class="txt_input" name="conf[truename]" size="39" type="text" value="" id="truename" limit="required:false;len:2-10" msg="联系人不得超过10个字符" msgarea="span_truename" original-title="请输入真实姓名，格式：张三">
                                            	
<select name="conf[sex]">
<option value="男" selected="">
男</option>
<option value="女">
女</option>
</select>
<span id="span_truename"></span>
</div>

                                            <div class="grid_3 t_l">
                                            	
<button onclick="location.href='index.php?do=user&amp;view=payitem&amp;op=auth&amp;auth_code=realname'" value="实名认证" type="button">
<span class="icon plus">&nbsp;</span>
实名认证</button>
                                            </div>
                                        </div>
<div class="rowElem clearfix">
                                            <label class="grid_3 t_r">
                                               出生日期：                                            </label>
                                            <div class="grid_12 ">
                                                <input class="txt_input" name="conf[birthday]" type="text" size="39" value="" onclick="showcalendar(event, this, 0)" msgarea="span_birthday" limit="required:true;type:date;less:max" msg="日期格式不正确或您未满15岁" id="birthday" original-title="请填写您的出生日期，早于1999-12-13">
 <span id="span_birthday"></span>
                                            </div>


                                        </div>

<div class="rowElem clearfix form_button">
                                            <button type="button" name="sbt_edit" class="button" value="保存" onclick="check_basic1()">
                                                <span class="check icon"></span>保存                                            </button>
                                        </div>


</div>
		
                                       <div id="enterprise1" class="hidden">
                                     	   <div class="rowElem clearfix">
                                            <div class="grid_18 alpha omega">
                                                <label class="grid_3 t_r">
                                                	<span id="ab_1">个人简介</span>
                                                	<span id="ab_2" class="hidden">企业简介</span>
：                                                </label>
<div class="ml_5 clearfix fl_l">
                                                <textarea cols="80" rows="8" name="conf[summary]" id="tar_content" msgarea="msg_content" class="xheditor-simple {skin:'nostyle'}" style="width: 400px; display: none;" ignore="true" original-title=""></textarea><input type="text" id="xhe0_fixffcursor" style="position:absolute;display:none;" original-title="" class="txt_input"><span id="xhe0_container" class="xhe_nostyle" style=""><table cellspacing="0" cellpadding="0" class="xheLayout" style="width:400px;height:128px;" role="presentation"><tbody><tr><td id="xhe0_Tool" class="xheTool" unselectable="on" style="height:1px;" role="presentation"><span class="xheGStart"></span><span><a href="#" title="段落标签" cmd="Blocktag" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnBlocktag" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">段落标签</span></a></span><span><a href="#" title="字体" cmd="Fontface" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnFontface" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">字体</span></a></span><span><a href="#" title="字体大小" cmd="FontSize" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnFontSize" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">字体大小</span></a></span><span><a href="#" title="加粗 (Ctrl+B)" cmd="Bold" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnBold" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">加粗 (Ctrl+B)</span></a></span><span><a href="#" title="斜体 (Ctrl+I)" cmd="Italic" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnItalic" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">斜体 (Ctrl+I)</span></a></span><span><a href="#" title="下划线 (Ctrl+U)" cmd="Underline" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnUnderline" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">下划线 (Ctrl+U)</span></a></span><span><a href="#" title="删除线" cmd="Strikethrough" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnStrikethrough" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">删除线</span></a></span><span><a href="#" title="字体颜色" cmd="FontColor" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnFontColor" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">字体颜色</span></a></span><span><a href="#" title="背景颜色" cmd="BackColor" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnBackColor" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">背景颜色</span></a></span><span class="xheGEnd"></span><span class="xheSeparator"></span><span class="xheGStart"></span><span><a href="#" title="对齐" cmd="Align" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnAlign" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">对齐</span></a></span><span><a href="#" title="列表" cmd="List" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnList" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">列表</span></a></span><span><a href="#" title="减少缩进" cmd="Outdent" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnOutdent" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">减少缩进</span></a></span><span><a href="#" title="增加缩进" cmd="Indent" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnIndent" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">增加缩进</span></a></span><span class="xheGEnd"></span><span class="xheSeparator"></span><span class="xheGStart"></span><span><a href="#" title="超链接 (Ctrl+L)" cmd="Link" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnLink" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">超链接 (Ctrl+L)</span></a></span><span><a href="#" title="图片" cmd="Img" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnImg" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">图片</span></a></span><span><a href="#" title="表情" cmd="Emot" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnEmot" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">表情</span></a></span><span><a href="#" title="源代码" cmd="Source" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnSource" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">源代码</span></a></span><span><a href="#" title="关于 xhEditor" cmd="About" class="xheButton xheEnabled" tabindex="-1" role="button"><span class="xheIcon xheBtnAbout" unselectable="on" style="font-size:0;color:transparent;text-indent:-999px;">关于 xhEditor</span></a></span><span class="xheGEnd"></span><br></td></tr><tr><td id="xhe0_iframearea" class="xheIframeArea" role="presentation" style="height: 71px;"><iframe frameborder="0" id="xhe0_iframe" src="javascript:;" style="width:100%;"></iframe></td></tr></tbody></table></span>
  <div id="msg_content"></div>
 <div class="ui_note">
                                                您的个人简介直接影响到雇主对您的第一印象，请慎重对待。                                            	</div>
</div>
                                            </div>
                                           </div>
   
   <div class="rowElem clearfix form_button">
                                            <button type="button" name="sbt_edit" class="button" value="保存" onclick="check_basic2()">
                                                <span class="check icon"></span>保存                                            </button>
                                       		</div>
   
   
                                        </div>


<script type="text/javascript" src="resource/js/xheditor/xheditor.js"></script>
<script type="text/javascript">
              $(function(){
editor = $("#tar_content").xheditor();
//editor.checkInner();
       })
           </script>
                                        <!--基本资料end-->
                                       
                                    </form>
                                    <!--from表单 end-->
                                </div>
                            </div>
                            <!--detail内容 end-->
                        </div>
                        <!--main content end-->
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </section>
</div>