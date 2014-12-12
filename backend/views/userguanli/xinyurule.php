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
<h1>规则管理</h1>
     <div class="tool"> 
        <a href="index.php?r=userguanli/xygz"        class="here">信誉规则管理</a>
        <a href="index.php?r=userguanli/xygzadd" >增加信誉规则</a>
</div>
</div>
<div class="box tip clearfix p_relative" id="man_tips">
    	<div class="control"><a title=关闭 href="javascript:void(0);"><b>×</b></a></div>
        <div class="title"><h2>小提示</h2></div>
        <div class="detail pad10">
            <ul>
            	<li>角色雇主与买家等同，角色威客与卖家等同,前端显示会根据不同的角色显示对应的头衔与图片</li>
            </ul>
        </div>
</div>


<div class="box list">
    	<div class="title"><h2>信誉规则列表</h2></div>
        <div class="detail">
<form method="" action="" id="frm_user_search">
  		<table cellpadding="0" cellspacing="0">
  		  <tbody>
          <tr>
            <th>编号</th>
<th>信誉值</th>
<th>能力值</th>
<th>买家头衔</th>
<th>卖家头衔</th>

<th>操作</th>
          </tr>
<?php foreach ($rule as $k=>$v){?>
<tr class="item">
    <td><?php echo $v['mark_rule_id']?></td>
    <td><?php echo $v['g_value']?></td>
    <td><?php echo $v['m_value']?></td>
    <td><?php echo $v['g_title']?></td>
    <td><?php echo $v['m_title']?></td>
    <!--<td><a href="<?php echo $v['g_ico']?>" target="_blank"><img src="" /></a></td>
    <td><a href="<?php echo $v['m_ico']?>" target="_blank"><img src="<?php echo $v['m_ico']?>" /></a></td>-->
    <td>
        <a class="button dbl_target" href="index.php?r=userguanli/xygzup&id=<?php echo $v['mark_rule_id']?>"><span class="pen icon"></span>编辑</a>
        <a class="button" href="index.php?r=userguanli/xygzdel&id=<?php echo $v['mark_rule_id']?>" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
    </td>
</tr>
<?php }?>

           <tr>
          	<td colspan="8">
          		
          	</td>
          </tr>
  </tbody>
        </table>
</form>
        </div>
</div>
<script type="text/javascript">
$(function(){
$(".control").add(".title").click(function(){
$(".tip").children().not($(".control,.title")).slideToggle('800');
});
})
</script>
<!--主体结束-->
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