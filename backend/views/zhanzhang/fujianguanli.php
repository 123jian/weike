
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
    	<h1>附件管理</h1>
         <div class="tool"> 
            <a href="index.php?do=tool&view=file" class="here" >附件</a>
    	</div>
</div>
<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
<form action="#" method="get" id="frm_list">
        	<input type="hidden" name="do"   value="tool">
<input type="hidden" name="view" value="file">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<tr>
 		<th>附件ID</th>
<td><input type="text" class="txt" name="txt_file_id" value="" onkeyup="clearstr(this);"></td>
<th>附件名称</th>
<td><input type="text" class="txt" name='txt_file_name' value="" onkeyup="clearspecial(this);"></td>
 	</tr>

<tr>
<th>显示条数</th>
<td>
<select name="wh[page_size]" class="ps vm">
<option value="10" selected="selected">每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
</td>
<th>结果排序</th>
<td>

<select name="ord[]">
                        <option value="file_id"  selected="selected">默认ID排序</option>
                        <option value="file_name" >附件名称</option>
<option value="on_time" >上传时间</option>
                        </select>
                        <select name="ord[]">
                        <option selected="selected"  value="desc">递减</option>
                        <option  value="asc">递增</option>
                        </select>
<button type="submit" name="sbt_search" value=搜索 class="pill" />
<span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
</tr>
 
 </tbody>
</table>
</form>
        </div>
 </div>


 <div class="box list">
 
  	  	<div class="title"><h2>附件管理</h2></div>
        	<div class="detail">
        		<form name="frm" id="frm" method="post" action="index.php?do=tool&view=file">
        			<div id="ajax_dom">
        				<input type="hidden" name="page" value="1">
          		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
                <tr>
                	<th width="15">
                		<input type="checkbox" id="checkbox" onclick="checkall();">
                	</th>
                    <th width="130" >
                        附件ID
                    </th>
                    <th class="100" >
                        所属对象                    </th>
                    <th class="motif" >
                        附件名称                    </th>
                    <th width="200">
                        时间 
                    </th>
                    <th width="60">
                      删除                    </th>
                </tr>
                                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="19">
                    </td>
                    <td >
                        19                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/2282751640079d7d50.jpg" target="_blank" >medish7.jpg</a>
                    </td>
                    <td>
                        2013-04-09 19:50:17                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=19"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="18">
                    </td>
                    <td >
                        18                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/69285163fcde4fe35.jpg" target="_blank" >n_1537101205110798.jpg</a>
                    </td>
                    <td>
                        2013-04-09 19:34:54                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=18"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="17">
                    </td>
                    <td >
                        17                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/110585163f45447cce.jpg" target="_blank" >n_1537101205110798.jpg</a>
                    </td>
                    <td>
                        2013-04-09 18:58:28                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=17"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="16">
                    </td>
                    <td >
                        16                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/34715163f16eaa527.png" target="_blank" >11947882565163807ba4871.png</a>
                    </td>
                    <td>
                        2013-04-09 18:46:06                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=16"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="15">
                    </td>
                    <td >
                        15                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/198065163f0bc185b1.jpg" target="_blank" >$H~%T2`~SK@KIR7}51NW(DO.jpg</a>
                    </td>
                    <td>
                        2013-04-09 18:43:08                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=15"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="14">
                    </td>
                    <td >
                        14                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/253115163ee22867f3.jpg" target="_blank" >153.jpg</a>
                    </td>
                    <td>
                        2013-04-09 18:32:02                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=14"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="13">
                    </td>
                    <td >
                        13                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/24925163ea9f544ae.jpg" target="_blank" >873036335162c3b7aab48.jpg</a>
                    </td>
                    <td>
                        2013-04-09 18:17:03                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=13"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="12">
                    </td>
                    <td >
                        12                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/255615163e9f7e366b.png" target="_blank" >54536811651638543988e3.png</a>
                    </td>
                    <td>
                        2013-04-09 18:14:15                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=12"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="11">
                    </td>
                    <td >
                        11                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/215165163e99f7a44c.jpg" target="_blank" >154305246751638ae55b462.jpg</a>
                    </td>
                    <td>
                        2013-04-09 18:12:47                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=11"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="10">
                    </td>
                    <td >
                        10                    </td>
                    <td >
                                            </td>
                    <td >
                        <a href="../../data/uploads/2013/04/09/192895163e866c4dc9.jpg" target="_blank" >11410900475162c4a63f916.jpg</a>
                    </td>
                    <td>
                        2013-04-09 18:07:34                    </td>
                    <td>
                        <a href="index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&ac=del&file_id=10"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" >
                    	
                        <label for="checkbox">全选</label>

<input type="hidden" name="sbt_action" class="sbt_action"/>　
<button type="submit" name="sbt_del" class="negative pill button" value="批量删除" onclick="return batch_act(this,'frm')" >
<span class="trash icon"></span>批量删除</button> 
                            </td>
                        </tr>
                        </table>
<div class="page">
                                    <span> 1 / 2页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=file&page=1&wh[page_size]=10&txt_file_id=&txt_file_name=&ord[]=&ord[]=&page=2','2','1')>下一页>></a>                                </div>
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
