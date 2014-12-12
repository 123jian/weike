
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
    	<h1>数据库管理</h1>
         <div class="tool">         
            <a href="index.php?do=tool&view=dbbackup" class="here">备份</a>
            <a href="index.php?do=tool&view=dbrestore">恢复</a>
<a href="index.php?do=tool&view=dboptim">优化</a>
<a href="index.php?do=tool&view=dboptim&op=repair">修复</a>
</div>
</div>
<div class="box list">
  <div class="detail">
    <div class="tabcon">
     <div class="title"><h2>数据库备份</h2></div>
<form method="post" action="#" id="frm_cat_edit">
   			<input type="hidden" name="do" value="tool">
<input type="hidden" name="view" value="dbbackup">
          	 <table cellpadding="0" cellspacing="0">
           	  <tbody>
            	  <tr class="item">
              		<td width="300"><img src="tpl/img/SQl15bg.gif"></td>
              		<td class="loading" align="center">kppw22</td>
              		<td width="300">
              			<button type="button" name="sbt_edit" id="backup" class="primary positive pill button">
              				<span class="book icon"></span>立即备份</button>
</td>
             	 </tr>
          	 </tbody>
             </table>
       </form>
    </div>
 </div><div class="backshow"></div>
</div>
<script type="text/javascript">
$("#backup").click(function(){
$.ajax({
url:"index.php?do=tool&view=dbbackup&sbt_edit=1",
dataType:'json',
beforeSend:function(){
$(".loading").html("数据备份中,请稍候...</br><img src='tpl/img/loading.gif'>");
},
success:function(json){
if(json.status==1){
$.each(json.data,function(i,n){
str = "<p>备份数据表"+n+"成功</p>";
if(i==0){
$(".detail").html(str);
}else{
$(".detail").append(str);
}
$("html,body").animate({scrollTop:$(".backshow").offset().top},50);
if(i+1==json.data.length){
setTimeout("winReload(1)",6500);
}
})
}else{
setTimeout("winReload(0)",1500);
}
},
error:function(){
setTimeout("winReload(0)",1500);
}
})
})

function winReload(t){
window.location.replace("index.php?do=tool&view=dbbackup&t="+t);
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
