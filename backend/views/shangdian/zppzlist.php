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
    	<h1>模型管理</h1>
 <div class="tool"> 
        <a href="index.php?do=config&view=model&model_type=task" class="here">任务模型管理</a>
        <a href="index.php?do=config&view=model&model_type=shop" >商城模型管理</a>
</div>
    </div>
  <div class="box list">
  	<div class="title">
  		<h2>任务模型管理</h2>
</div>
        	<div class="detail">
        		<form action="index.php?do=config&view=model&model_type=task&op=add" method="post">
        			 <table cellpadding="0" cellspacing="0">
            	<tr>
                <th scope="row">
                    模型标识                </th>
                <th scope="row">
                    启用状态                </th>
               <th scope="row">
                    模型标识                </th>
                <th scope="row">
                    模型名                </th>
               <th scope="row">
                    模型目录                </th>
               <th scope="row">
                    模型作者                </th>
                <th scope="row" width="50">
                    排序                </th>
                <th scope="row">
                     设为禁用                </th>
<th scope="row">
       	             配置            
                </th>
<th scope="row">
                    卸载                </th>

            </tr>
<?php foreach ($data as $k=>$v){?>
              <tr>
                <td><?php echo $v['model_id']?></td>
                <td><font color="red"><?php if($v['model_status']==1){ echo '开启';}else{ echo '关闭';}?></font></td>
                <td><?php echo $v['model_code']?></td>
                <td><?php echo $v['model_name']?></td>
                <td><?php echo $v['model_dir']?></td>
                <td><?php echo $v['model_dev']?></td>
                <td>
                    <input size="3" class="txt" name="md_list_order5"  id="md_list_order5" value="<?php echo $v['model_id']?>" type="text" onchange="set_listorder('5',this.value);">
                </td>
                <td>
                    <?php if($v['model_status']==1){?>
                    <a href="index.php?r=shangdian/jy&id=<?php echo $v['model_id']?>"  class="button">
<span class="lock icon"></span>禁用</a>
                    <?php }else{?>
                    <a href="index.php?r=shangdian/qy&id=<?php echo $v['model_id']?>"  class="button">
<span class="lock icon"></span>开启</a>
                    <?php }?>
                    </td>
<td>
 	<a href="index.php?do=model&model_id=5&view=config" class="button">
 	<span class="cog icon"></span>配置</a>
</td>
<td>
<a href="index.php?do=config&view=model&model_type=task&op=del&model_id=5" onclick="return uninstall(this);" class="button">
<span class="downarrow icon"></span>卸载</a>
                </td>
            </tr>
<?php }?>
                <tr>
                    <td colspan="7">
                        安装新模型,请输入模板所在目录: <input type="text" name="txt_model_name" value="" class="txt">
<button type="submit" name="submit" class="button pill" value=安装 ><span class="uparrow icon"></span>安装</button>
                    </td>
                </tr>
           
        </table>
 </form>
   </div>
    <script>
        function set_listorder(model_id, value){
            $.get('index.php?do=config&view=model&op=listorder', {
                model_id: model_id,
                value: value
            });
        }
function uninstall(o,s){
d = art.dialog;
var c = "确定要卸载此任务模型吗？";
if(s){
c=s;
}
d.confirm(c, function(){
window.location.href = o.href;
});
return false;	
}
    </script>
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
