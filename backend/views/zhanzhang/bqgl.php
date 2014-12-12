
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="../../resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="../../resource/js/jquery.js"></script>
<script type="text/javascript" src="../../resource/js/system/keke.js"></script>
<script type="text/javascript" src="../../resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    	<h1>标签管理</h1>
        <div class="tool">         
            <a href="index.php?do=tpl&view=taglist&t=" class="here" >标签调用</a>
<a href="index.php?do=tpl&view=edit_tag&tag_type=5&t="  >标签添加</a>
        </div>
</div>
<div class="box clearfix">

<div class="tab clearfix">			
       	<a href="index.php?do=tpl&view=taglist&type=1" class="select">活动</a>
    <a href="index.php?do=tpl&view=taglist&type=2" >协议</a>

</div>
<form method="post" action="#" id="frm_art_search">
<input type="hidden" name="do" value="tpl">
<input type="hidden" name="view" value="taglist">
<input type="hidden" name="tag_type" value="5">
<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
    	<div class="detail" id="detail"> 
    		<table cellspacing="0" cellpadding="0">    		
<tbody>
<tr>
<th>结果排序</th>
<td>
<select name="ord[]">
                       			 <option value="tag_id"  selected="selected">默认id排序</option>
                       			 <option value="tagname" >模板名</option>
                        </select>
                        <select name="ord[]">
                       			 <option selected="selected"  value="desc">递减</option>
                        		<option  value="asc">递增</option>
                        </select>
</td>
<th>结果排序</th>
<td >
<select name="slt_page_size">
                			<option value="10" selected="selected">每页显示10</option>
                			<option value="20" >每页显示20</option>
                			<option value="30" >每页显示30</option>
            			</select>
           				<button class="pill" type="submit" value=搜索 name="sbt_search">
<span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
</tr>          			
           		</tbody>
</table>
    	</div> 
    </div>
</form>
<div class="box list clearfix">
<form method="post" action="index.php?do=tpl&view=taglist" name="frm_taglist" id="frm_taglist">
<div class="title"><h2>标签列表</h2></div>
    <div class="detail"> 
    	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab_list">
        	<tr class="item">
        		<th width="15">
        			<!--<input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>-->&nbsp;
        		</th>
           		<th align="left">标签名称</th>
           		<th>内部调用代码</th>
                <th>js调用代码</th>
                <th width="60">预览</th>
                <th width="60">详细</th>
                <th width="60">删除</th>
            </tr>
                                <tr class="item">
                	<td>
                       <input type="checkbox" name="ckb[]" class="checkbox" value="153">
                    </td>
                    <td>
                        热门活动                    </td>
                    <td>
                        <input type="text" class="txt" value="<!--{tag 热门活动}-->" size="30" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="text" class="txt" value="<script src='http://localhost/weike/js.php?op=tag&tag_id=153'></script>"  size="40" onfocus="this.select();">
                    </td>
                    <td>
                        <a href="plu.php?do=previewtag&tagid=153" target="_blank" class="button dbl_target">
                        <span class="book icon"></span>浏览</a>
                    </td>
                    <td>
                        <a href="index.php?do=tpl&view=edit_tag&tagid=153&tag_type=5&type=1" class="button">
                        <span class="pen icon"></span>编辑</a>
                    </td>
                    <td>
                        <a href="index.php?do=tpl&view=taglist&op=del&delid=153&tag_type=5&type=1" onclick="return cdel(this)"  class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
<tr>
            	<td colspan="7">                    
                    <div class="clearfix"> 
     <input type="checkbox" onclick="checkall(event);" id="checkbox" name="checkbox"/>                        
                     <label for="checkbox">全选</label>  
                     <input type="hidden" name="sbt_action" class="sbt_action" id="sbt_action"/>　                   
                        <button class="pill negative button" type="submit" value="批量删除" name="sbt_action" onclick="return batch_act(this,'frm_taglist')"><span class="icon trash">&nbsp;</span>批量删除</button>
<button class="pill positive button" type="button" name="sbt_add"  onclick="document.location.href='index.php?do=tpl&view=edit_tag&tag_type=5&type=1'"/><span class="check icon"></span>添加标签</button>
                    </div>
                 </td>
        	</tr>
       </table>
   <div class="page">
                    </div>
  </div>
</form>
</div>
</div>
</div>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "../../resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "../../resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "../../resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "你确认删除操作？";
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cpass(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认审核通过？";
} else {
var c = "确认审核失败？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cfreeze(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认冻结？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function crecomm(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认推荐？";
} else {
var c = "确认取消推荐？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function pdel(frm) {
d = art.dialog;
var frm = frm;
var c = "你确认删除操作？";
d.confirm(c, function() {
$("#" + frm).submit();
});
return false;
}
function batch_act(obj, frm) {
d = art.dialog;
var frm = frm;
var c = $(obj).val();
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>
