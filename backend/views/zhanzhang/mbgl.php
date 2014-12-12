
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
    	<h1>模板管理</h1>
          <div class="tool">         
<a href="index.php?do=config&view=tpl" class="here" >模板编辑</a>

        </div>
</div>
<div class="box list">
<div class="detail">
    <form name="frm_config_msg" action="#" method="post" enctype="multipart/form-data">
        <input type="hidden" name="vip_cash_rul_count" id="vip_cash_rul_count" value="">
        <table  height="auto" border="0" cellspacing="0" cellpadding="0" >
            <tr>
            	<th>模板名称</th>
<th width="150">模板图片</th>
<th>说明</th>
<th>开启状态</th>
<th>当前皮肤</th>
<th>开发者</th>
<th>操作</th>
            </tr>

<tr class="item">
            	
                <td>
                	蓝色模板                </td>
<td>
                    <img src="../../tpl/default/img/style/default.jpg" alt=预览 width="110px;" height="120px;" />
</td>
<td>最专业的威客模板</td>
                <td>
                	<label for="rdo_temp_1">
                         <input type="radio" value="1" 
 id="rdo_temp_1" name="rdo_is_selected" 
 checked="checked"/>
                    </label>
                </td>
                <td>
                	<input type="radio" value="blue" id="rdo_tpl_1"
 name="skin[default]" checked/>默认蓝</br>
                </td>
<td>宇哥</td>	
                <td>
                	<button type="submit"  name="sbt_edit" id="sbt_edit" class="button" value="启用"> 启用 </button>
                	 <a type="button" class="button" value="预览" onclick="window.open('http://www.kekezu.com/app_store-view-app_tpl.html#holder')"><span class="book icon"></span>浏览</a>
                     
 <a type="button" class="button" value="" href='index.php?do=tpl&view=export&tplname=default'>备份</a>
                 </td>  
                   
            </tr>
  <tr>
                <td scope="row">
                    
                </td>
                <td colspan="6">
                	请输入目录名:<input name="txt_newtplpath" type="text" class="txt" >
<button type="submit" name="sbt_edit" class="button" value=从目录安装>从目录安装</button>
<!--<input type="file" name="uploadtplfile"  > 
<button type="submit" value= name="sbt_edit" class="button"></button>-->
                    
                </td>
             </tr>
        </table>
    </form>
</div>
</div>
<script type="text/javascript">
function simg(url){
art.dialog.through({title:浏览,content:"<img src='"+url+"'>"});
}
</script>
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
