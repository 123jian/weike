
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
    	<h1>威客文章作品管理</h1>
        <div class="tool">              
         <!--  <a href="index.php?do=model&model_id=6&view=order">作品列表</a>-->
  <a href="index.php?do=model&model_id=6&view=list" class="here" >作品列表</a> 
        </div>
</div>
<!--页头结束-->

<!--提示结束-->

<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
    	<div class="detail" id="detail"> 
<form method="post" action="index.php?r=zixun/soso" id="frm_art_search">
<input type="hidden" name="page" value="1">
    		<table cellspacing="0" cellpadding="0">    		
<tbody>
<tr>
<th>作品编号</th>
<td><input type="text" class="txt" name="c_id" ></td>
<th>作品名称</th>
<td>
<input type="text" class="txt" name='c_name' id="title" value="">
</td>
<th>店主</th>
<td>
<input type="text" class="txt" name="c_namea" id="username" value="">
</td>
</tr>
<tr>
<th>作品状态</th>
<td>
 <select name="c_state">
 	<option value="">作品状态</option>
	<option   value="0">未审核</option>
	<option   value="1">出售中</option>
	<option   value="2">已售完</option>
	<option   value="3">已下架</option>
 </select>
 </td>
</td>
<td><button class="pill" type="submit" value="搜索"><span class="icon magnifier">&nbsp;</span>搜索</button></td>
</tr>       
</tbody>

</table>
				
</form>
    	</div>
    </div>
<!--搜索结束-->

<div class="box list">	
    <div class="title"><h2>作品列表</h2></div>
    <div class="detail"> 
<form action="" method="post" id="frm_list">
<input type="hidden" name="w[page_size]" value="10">
<div id="ajax_dom">
<input type="hidden" name="page" value="1">
    	<table cellpadding="0" cellspacing="0">
    		<tbody>
			
        	<tr>
        		<th width="8%">ID</th>
           		<th width="25%">作品名称</th>
           		<th width="10%">报价(元) / 单位</th>
				<th width="8%">店主</th>     
				<th width="10%">作品状态</th>				
                <th width="17%">操作</th>
            </tr>
		<?php foreach($info as $vv){?>
                 <tr class="item">
					<td><input type="checkbox" id="cho" name="ch" value="<?php echo $vv['commodity_id']?>"><?php echo $vv['commodity_id']?></td>
					<td><a target="_blank" href="http://www.php10.com/weike/index.php?do=service&sid=2">
						<?php echo $vv['c_name']?></a></td>
					<td>￥<?php echo $vv['c_price']?> / 个</td>
					<td><?php echo $vv['c_namea']?></td>
					<td><?php if($vv['c_state']==0){
									echo"未审核";
								}elseif($vv['c_state']==1){
										echo"出售中";
								}elseif($vv['c_state']==2){
										echo"已售完";
								}elseif($vv['c_state']==3){
										echo"已下架";
								}
						?>
						
					<td>
<!--  --><a href="index.php?r=zixun/zpck&id=<?php echo $vv['commodity_id']?>" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?r=zixun/dpdel&id=<?php echo $vv['commodity_id']?>" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?r=zixun/upd&id=<?php echo $vv['commodity_id']?>" class="button"><span class="lock icon"></span>下架</a>
<a href="index.php?r=zixun/sh&id=<?php echo $vv['commodity_id']?>" class="button"><span class="lock icon"></span>审核</a>
</td>
           <?php }?>
                      	<tr>
            	<td colspan="9">
                    <div class="page fl_right"></div>
                    <div class="clearfix">
                  		<input type="checkbox" class="checkbox" id="cho" name="ch" onclick="alla()"/>
                        <label for="checkbox">全选</label>
                        <input type="hidden" name="sbt_action" class="sbt_action" />
<button class="pill negative" type="submit" value="批量删除"  onclick="dela()"><span class="icon trash">&nbsp;</span>批量删除</button>                        
                       
</div>
                 </td>
        	</tr>
 </tbody>
        </table></div>
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
</script>
<script type="text/javascript">
<!--
	//全选按钮
	function alla(){
		var checkboxs=document.getElementsByName("ch");
		 for (var i=0;i<checkboxs.length;i++) {
		  var e=checkboxs[i];
		  e.checked=!e.checked;
	 }
	}

	function dela(){
		//接收id
		var id = "";
		var ch = document.getElementsByName('ch');
		for (var i=0;i<ch.length ;i++ ){
			if (ch[i].checked==true){
				id += ch[i].value+",";
			}
		}
		//验证是否选中删除记录
		if (id==""){
			alert("请选择要删除的数据");
			return false;
		}
		id = id.substring(0,id.length-1);
		//alert(id);
		//location.href="index.php?r=ad_renwu/dele&id="+id;
		 top.location = "index.php?r=zixun/dele&id="+id;
	}

//-->
</script>
</body>
</html>
