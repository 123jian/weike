
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
    	<h1>动态管理</h1>
        <div class="tool">         

            <a href="index.php?do=tpl&view=feed" class="here">动态列表</a>

        </div>
</div>

<form method="get" action="index.php" id="frm_search">
<input type="hidden" name="do" value="tpl">
<input type="hidden" name="view" value="feed">
<input type="hidden" name="page" value="1">
<input type="hidden" name="type" value="data">
<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
    	<div class="detail"  id="detail"> 
    		<table cellspacing="0" cellpadding="0">    		
<tbody>
<tr>
                <th>动态名称</th>
                <td>
                 <input type="text" class="txt" name="txt_title" id="txt_title" value="">
 *支持模糊查询 </td>
                </tr>
<tr>
<th>结果排序</th>
<td>
<select name="ord[]">
                        <option value="feed_id"  selected="selected">默认id排序</option>
                        <option value="title" >动态名</option>
 <option value="feed_time" >时间</option>
                        </select>
                        <select name="ord[]">
                        <option selected="selected"  value="desc">递减</option>
                        <option  value="asc">递增</option>
                        </select>
</td>
<th>显示结果</th>
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

<div class="box list">
 

 
<div class="title"><h2>动态列表</h2></div>
    <div class="detail"> 
<div id="ajax_dom">
<input type="hidden" name="page" value="1">
 <table width="100%" border="0" cellspacing="0" cellpadding="0"  >
                <tr>
                    <th width="60">
                     ID
                    </th>
                   
                    <th width="350">
                       事件标题                    </th>
                    <th width="100">
                       事件类型                    </th>
                    <th width="100">
                       用户名                    </th>
                    <th width="200">
                        动态生成时间                    </th>
                    <th width="120">
                        操作                    </th>
                </tr>
                                <tr>
                    <td colspan="6" >
                        <label for="checkbox">
                            <input type="checkbox" id="checkbox" onclick="checkall();">全选</label>	
<input type="hidden" name="sbt_action" class="sbt_action"/>
<button type="submit" onclick="return batch_act(this,'frm_search')" name="sbt_action" value=批量删除 class="pill negative button" >
<span class="trash"></span>批量删除</button>
                    </td>
                  </tr>
            </table>
<div class="page"></div>
</div>
</div>
</form>
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
