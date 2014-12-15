<?php
use yii\widgets\LinkPager;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="./resource/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="./resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="./resource/css/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="./resource/js/jquery.js"></script>
<script type="text/javascript" src="./resource/js/system/keke.js"></script>
<script type="text/javascript" src="./resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
    	<h1>认证项目</h1>
        <div class="tool">              
         <!--  <a href="index.php?do=model&model_id=6&view=order">作品列表</a>-->
 
        </div>
</div>
<!--页头结束-->

<!--提示结束-->


<!--搜索结束-->

<div class="box list">	
    <div class="title"><h2>认证列表</h2></div>
    <div class="detail"> 
<form action="" method="post" id="frm_list">
<input type="hidden" name="w[page_size]" value="10">
<div id="ajax_dom">
<input type="hidden" name="page" value="1">
    	<table cellpadding="0" cellspacing="0">
    		<tbody>
			
        	<tr>
				<th width="8%">认证ID</th> 
        		<th width="8%">认证标识</th> 
           		<th width="25%">认证名称</th>
           		<th width="10%">认证费用</th>
				    
				<th width="10%">认证状态状态</th>				
                <th width="17%">操作</th>
            </tr>
		<?php foreach($model as $vv){?>
                 <tr class="item">
					<td><?php echo $vv['commodity_id']?></td>
					<td><?php echo $vv['c_namea']?></td>
					<td><a target="_blank" href="http://www.php10.com/weike/index.php?do=service&sid=2">
						<?php echo $vv['c_name']?></a></td>
					<td><?php echo $vv['c_price']?> / 个</td>
					<td><?php if($vv['c_state']==0){
									echo"未禁用";
								}elseif($vv['c_state']==1){
										echo"出售中";
								}elseif($vv['c_state']==2){
										echo"已售完";
								}elseif($vv['c_state']==3){
										echo"已禁用";
								}
						?>
						
					<td>

<a href="index.php?r=index/shanc&id=<?php echo $vv['commodity_id']?>" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?r=index/upd&id=<?php echo $vv['commodity_id']?>" class="button"><span class="lock icon"></span>禁用</a>

</td>
           <?php }?>
		   
        
 </tbody>
        </table>
		 <div class="page fl_right"><?= LinkPager::widget(['pagination'=>$pages]);?></div>
		 </div>
     </form>   
    </div> 
</div> 
<!--主体结束-->

 </div>
<script type="text/javascript"
src="./resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="./resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="./resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="./lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "./resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "./resource/js/xheditor/xheditor.js",
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
path : "./resource/js/system/script_calendar.js"
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

</body>
</html>
