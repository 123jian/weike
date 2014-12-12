<?php
use yii\widgets\LinkPager;
?>
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
    	<h1>店铺管理</h1>
          <div class="tool">          
<!--<a href="index.php?do=store&view=config" >店铺配置</a>-->
 <a href="index.php?do=store&view=list" class="here">店铺列表</a>
    	</div>
</div>


      <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
<form action="index.php?do=store&view=list" method="post" id="frm_list">
        	<input type="hidden" name="do"   value="store">
<input type="hidden" name="view" value="list">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<tr>
 		<th>ID</th>
<td><input type="text" class="txt" name="txt_shop_id" value="" onkeyup="clearstr(this);"></td>
<th>店铺名称</th>
<td><input type="text" class="txt" name='txt_name' value="" onkeyup="clearspecial(this);"></td>
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
                           <option value="shop_id"  selected="selected">默认排序</option>
                           <option value="on_time" >申请时间</option>
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
 	<div class="title"><h2>店铺列表</h2></div>
      	<div class="detail">
 		 <!--<span style="color:red;"></span>-->
<div id="ajax_dom">
<input type="hidden" name="page" value="1">
  		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
          	<th width="15%"><input type="checkbox" id="checkbox" onclick="checkall();">店铺ID</th>
          	<th width="15%">用户名</th>
            <th width="15%">店铺名</th>
            <th width="20%">申请时间</th>
            <th width="15%">状态</th>
            <th width="20%">操作</th>
</tr>
                    <?php foreach($data as $k=>$v){?>
        <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="<?php echo $v['shop_id']?>"><?php echo $v['shop_id']?></td>
<td><?php echo $v['username']?></td>
           <td><?php echo $v['shop_name']?></td>
           <td><?php echo date("Y-m-d",$v['on_time']);?></td>
           <td><span><?php if($v['shop_status']==""){ echo "未审核";}else if($v['shop_status']==1){ echo "开启";}else if($v['shop_status']==3){ echo "关闭";}else{ echo"审核不通过";}?></span></td>
<td>
    <?php if($v['shop_status']==""){?>
        <a href="index.php?r=shangdian/tg&id=<?php echo $v['shop_id']?>" class="button"><span class="check icon"></span>通过审核</a>
        <a href="index.php?r=shangdian/btg&id=<?php echo $v['shop_id']?>" class="button">审核不通过</a>
        <a href="index.php?r=shangdian/show&id=<?php echo $v['shop_id']?>" class="button">查看</a>
    <?php } else if($v['shop_status']==1){?>
        <a href="index.php?r=shangdian/on&id=<?php echo $v['shop_id']?>" class="button"><span class="check icon"></span>关闭</a>
        <a href="index.php?r=shangdian/show&id=<?php echo $v['shop_id']?>" class="button">查看</a>
    <?php }else if($v['shop_status']==3){?>
        <a href="index.php?r=shangdian/off&id=<?php echo $v['shop_id']?>" class="button"><span class="check icon"></span>开启</a>
        <a href="index.php?r=shangdian/show&id=<?php echo $v['shop_id']?>" class="button">查看</a>
    <?php }else{?>
        <a href="index.php?r=shangdian/show&id=<?php echo $v['shop_id']?>" class="button">查看</a>
        <a href="index.php?r=shangdian/dianpudel&id=<?php echo $v['shop_id']?>" class="button">删除</a>
    <?php }?>
</td>
          </tr>
                    <?php }?>
 
        </table>
<div class="page"><?= LinkPager::widget(['pagination' => $pages]); ?></div>
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
