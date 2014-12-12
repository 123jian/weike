
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
    	<h1>友情链接</h1>
        <div class="tool">         
            <a href="index.php?do=tpl&view=ink" class="here">链接管理</a>
<a href="index.php?do=tpl&view=edit_ink" >链接添加</a>
        </div>
</div> 

<form method="get" action="index.php" id="frm_art_search">
<input type="hidden" name="do" value="tpl">
<input type="hidden" name="view" value="ink">
<input type="hidden" name="page" value="1">
<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
    	<div class="detail"  id="detail"> 
    		<table cellspacing="0" cellpadding="0">    		
<tbody>
<tr>
               <th>链接ID</th>
                <td>
                  <input type="text" class="txt" size="12" name="txt_link_id" value="" onkeyup="clearstr(this);">
</td>
                 
                <th>链接名称</th>
                <td>
                 <input type="text" class="txt" name="txt_link_name" id="txt_link_name" value="">
 *支持模糊查询 </td>
                </tr>
<tr>
<th>结果排序</th>
<td>
<select name="ord[]">
                        <option value="link_id"  selected="selected">默认id排序</option>
                        <option value="link_name" >链接名</option>
 <option value="on_time" >时间</option>
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
 

 
<div class="title"><h2>标签列表</h2></div>
    <div class="detail"> 
    <div id="ajax_dom">
  	<input type="hidden" name="page" value="1">
            <table   border="0" cellspacing="0" cellpadding="0"  >
                <tr>
                	 
                    <th width="80">
        ID
                    </th>
                   
                    <th width="150">
                        链接名称                    </th>
                    <th class="motif" width="150">
                        链接地址                    </th>
                    <th class="80">
                        排序                    </th>
                    <th width="150">
                        时间 
                    </th>
                    <th width="60">
                        编辑                    </th>
                    <th width="60">
                        删除                    </th>
                </tr>
                                <tr class="item">
                	 
                    <td>
                        <input type="checkbox" name="ckb[]" class="checkbox" value="4"> 4                    </td>
 
                    <td>
                        武汉客客信息技术有限公司官网                    </td>
                    <td>
                        <a href="http://www.kekezu.com" target="_blank" >http://www.kekezu.com</a>
                    </td>
                    <td>
                        1                    </td>
                    <td>
                        2013-04-03 16:36                    </td>
                    <td>
                        <a href="index.php?do=tpl&view=edit_ink&link_id=4&page=1" class="button dbl_target"> <span class="pen icon"></span>编辑</a>
                    </td>
                    <td>
                       <a href="index.php?do=tpl&view=ink&page=1&slt_page_size=10&txt_link_id=&txt_link_name=&ord[]=&ord[]=&ac=del&link_id=4" onclick="return cdel(this);" class="button"> <span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	 
                    <td>
                        <input type="checkbox" name="ckb[]" class="checkbox" value="3"> 3                    </td>
 
                    <td>
                        客客团队交流社区                    </td>
                    <td>
                        <a href="http://www.kekezu.com/bbs" target="_blank" >http://www.kekezu.com/bbs</a>
                    </td>
                    <td>
                        2                    </td>
                    <td>
                        2013-04-02 15:32                    </td>
                    <td>
                        <a href="index.php?do=tpl&view=edit_ink&link_id=3&page=1" class="button dbl_target"> <span class="pen icon"></span>编辑</a>
                    </td>
                    <td>
                       <a href="index.php?do=tpl&view=ink&page=1&slt_page_size=10&txt_link_id=&txt_link_name=&ord[]=&ord[]=&ac=del&link_id=3" onclick="return cdel(this);" class="button"> <span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	 
                    <td>
                        <input type="checkbox" name="ckb[]" class="checkbox" value="2"> 2                    </td>
 
                    <td>
                        客客团队演示站点                    </td>
                    <td>
                        <a href="http://www.kppw.cn" target="_blank" >http://www.kppw.cn</a>
                    </td>
                    <td>
                        3                    </td>
                    <td>
                        2012-09-04 15:27                    </td>
                    <td>
                        <a href="index.php?do=tpl&view=edit_ink&link_id=2&page=1" class="button dbl_target"> <span class="pen icon"></span>编辑</a>
                    </td>
                    <td>
                       <a href="index.php?do=tpl&view=ink&page=1&slt_page_size=10&txt_link_id=&txt_link_name=&ord[]=&ord[]=&ac=del&link_id=2" onclick="return cdel(this);" class="button"> <span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	 
                    <td>
                        <input type="checkbox" name="ckb[]" class="checkbox" value="1"> 1                    </td>
 
                    <td>
                        KPPW系统演示站点                    </td>
                    <td>
                        <a href="http://www.kppw.cn/kppw" target="_blank" >http://www.kppw.cn/kppw</a>
                    </td>
                    <td>
                        4                    </td>
                    <td>
                        2013-04-03 21:10                    </td>
                    <td>
                        <a href="index.php?do=tpl&view=edit_ink&link_id=1&page=1" class="button dbl_target"> <span class="pen icon"></span>编辑</a>
                    </td>
                    <td>
                       <a href="index.php?do=tpl&view=ink&page=1&slt_page_size=10&txt_link_id=&txt_link_name=&ord[]=&ord[]=&ac=del&link_id=1" onclick="return cdel(this);" class="button"> <span class="trash icon"></span>删除</a>
                    </td>
                </tr>
<tr>
    <td colspan="9">
    <input type="checkbox" onclick="checkall(event);" id="checkbox" name="checkbox"/>
                
            	<label for="checkbox"> 全选</label>
            	<input type="hidden" name="sbt_action" class="sbt_action"/>
<button type="submit" name="sbt_action" onclick="return batch_act(this,'frm_art_search')" value="批量删除" class="pill negative" >
<span class="trash icon"></span>批量删除</button>
<a   name="sbt_add" value=添加友情链接 class="pill negative button"
 	 href="index.php?do=tpl&view=edit_ink"><span class="check icon"></span>添加友情链接 </a>
            	</td>
        </tr>
        </table>
<div class="page ">
                    	                </div>
</div>

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
