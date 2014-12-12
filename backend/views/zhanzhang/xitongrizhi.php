
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
    	<h1>系统日志</h1>
          <div class="tool">          
<a href="index.php?do=tool&view=log" class="here" >日志</a>
      
    	</div>
</div>


      <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
<form action="index.php?do=tool&view=log" method="post" id="frm_list">
        	<input type="hidden" name="do"   value="tool">
<input type="hidden" name="view" value="log">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<tr>
 		<th>日志ID</th>
<td><input type="text" class="txt" name="txt_log_id" value="" onkeyup="clearstr(this);"></td>
<th>操作员</th>
<td><input type="text" class="txt" name='txt_username' value="" onkeyup="clearspecial(this);"></td>
<th>日志内容</th>
<td><input type="text" class="txt" name='txt_content' value="" onkeyup="clearspecial(this);"> &nbsp;*支持模糊查询</td>
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
 <select name="w[ord][]">
                           <option value="log_id"  selected="selected">默认排序</option>
                           <option value="log_time" >日志时间</option>
                      </select>
                      <select name="w[ord][]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
<button type="submit" name="sbt_search" value=搜索 class="pill" />
<span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
</tr>
 
 </tbody>
</table>

        </div>
 </div>


<div class="box list">
 	<div class="title"><h2>系统日志</h2></div>
      	<div class="detail">
 		 <!--<span style="color:red;">温馨提示：请慎重操作！</span>-->
<div id="ajax_dom">
<input type="hidden" name="page" value="1">
  		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
          	<th width="5%"><input type="checkbox" id="checkbox" onclick="checkall();">ID</th>
      
            <th width="5%">操作员</th>
<th width="5%">用户组</th>
<th width="40%">内容</th>
            <th width="15%">时间</th>
<th width="10%">删除</th>
          </tr>
        <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="63">63</td>
           
<td>admin</td>
td>创始人</td>
            <td><a  href="javascript:void(0)" title="admin2014-12-06 07:45:59登陆系统">admin2014-12-06 07:45:59登陆系统</a></td>
<td>2014-12-06 07:45:59</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=63" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="62">62</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="admin2014-12-05 16:45:13登陆系统">admin2014-12-05 16:45:13登陆系统</a></td>
<td>2014-12-05 16:45:13</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=62" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="61">61</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="admin2014-12-05 15:47:07登陆系统">admin2014-12-05 15:47:07登陆系统</a></td>
<td>2014-12-05 15:47:07</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=61" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="60">60</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="admin2014-12-05 09:11:45登陆系统">admin2014-12-05 09:11:45登陆系统</a></td>
<td>2014-12-05 09:11:45</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=60" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="59">59</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="修改全局配置">修改全局配置</a></td>
<td>2013-04-09 23:23:16</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=59" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="58">58</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="admin2013-04-09 23:22:52登陆系统">admin2013-04-09 23:22:52登陆系统</a></td>
<td>2013-04-09 23:22:52</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=58" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="57">57</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="添加案例">添加案例</a></td>
<td>2013-04-09 20:38:02</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=57" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="56">56</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="添加案例">添加案例</a></td>
<td>2013-04-09 20:37:52</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=56" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="55">55</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="编辑用户mxc123">编辑用户mxc123</a></td>
<td>2013-04-09 19:35:10</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=55" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="54">54</td>
           
<td>admin</td>
<td>创始人</td>
            <td><a  href="javascript:void(0)" title="编辑用户樱桃小丸子">编辑用户樱桃小丸子</a></td>
<td>2013-04-09 19:33:05</td>
<td>
<a class="button dbl_target" href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del&log_id=54" onclick="return cdel(this);"><span class="icon trash">&nbsp;</span>删除</a>
</td>
          </tr>
           <tr>
            <td colspan="7">
            	<label for="checkbox">  
全选</label>
<input type="hidden" name="sbt_action" class="sbt_action"/>　
<button type="submit" name="sbt_action" value="批量删除" class="negative pill button" onclick="return batch_act(this,'frm_list')" >
<span class="trash icon"></span>批量删除</button>
<a href="index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=del_all" class="pill button" >
<span class="icon"></span>清空日志</a>
</td>
  </tr>
        </table>
<div class="page"><span> 1 / 7页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&page=3','3','1')>3</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&page=4','4','1')>4</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&page=5','5','1')>5</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&page=6','6','1')>6</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&page=7','7','1')>7</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tool&view=log&txt_username=&txt_content=&txt_log_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&page=2','2','1')>下一页>></a></div>
</div>
</div>
</form>

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
