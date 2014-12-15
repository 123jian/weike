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
    	<h1>威客作品编辑</h1>
        <div class="tool">
   <a href="index.php?do=model&model_id=6&view=edit&service_id=13&op=basic" class="here">作品信息</a>
       		<a href="index.php?do=model&model_id=6&view=edit&service_id=13&op=order" class="">作品订单</a>
       		<a href="index.php?do=model&model_id=6&view=edit&service_id=13&op=comm" class="">作品留言</a>
       		<a href="index.php?do=model&model_id=6&view=edit&service_id=13&op=mark" class="">作品互评</a>
       		        </div>
</div>
<!--页头结束-->    

<div class="box post">
    <div class="tabcon">
        	<div class="title"><h2>编辑威客作品</h2></div>       	
            <div class="detail">
                <form method="post" action="index.php?r=zixun/upda" >
                     <input type="hidden" name="pk[service_id]" value="13">      
                    <table width="100%" border="0" cellspacing="0" cellpadding="0"> 
					
<tr>
<th scope="row" width="130">店主：</th>
<td><input type="text" class="txt" name="c_name" value="<?php echo $result['c_namea']?>" size="50" ></td>
</tr>                   
                      <tr>
                        <th scope="row" width="130">作品名称：</th>
                        <td>
                         <input type="text" class="txt" name="c_name" value="<?php echo $result['c_name']?>" size="50" limit="required:true" msg="" tips="请输入作品名称" msgArea="title_msg">
                        </td>
                      </tr>
  <tr>
                        <th scope="row">作品报价：</th>
                        <td>
                        	<input type="text" class="txt" name="c_price" id="txt_price" size="5" value="<?php echo $result['c_price']?>" limit="type:float;required:true" msg="作品单价填写错误" title="作品单价可以含小数"  msgArea="price_msg"/>                        	
                        	元<span id="price_msg"></span>
</td>
                      </tr>
  <tr>
  	<th scope="row" >作品状态：</th>
				<td>
				  <select name="c_state" id="slt_service_status">		  
					<option value="<?php echo $result['c_state']?>"><?php if($result['c_state']==0){
									echo"未审核";
								}elseif($result['c_state']==1){
										echo"出售中";
								}elseif($result['c_state']==2){
										echo"已售完";
								}elseif($result['c_state']==3){
										echo"已下架";
								};?>
					</option>
				</select>
</td>
  </tr>

                        <th scope="row">商品描述:</th>
                        <td>
						<textarea name="c_describe" rows="8" cols="80" class="xheditor" ><?php echo $result['c_describe']?></textarea>
</td>
  </tr>   

              
                    <tr>
                        <th scope="row">&nbsp;</th>
                    	<td>
                    	<button name="sbt_edit" value="1" class="positive primary  button" type="submit">
                    	<span class="check icon"></span>提交</button>						
                    	<button type="reset"  name="rst_edit" class="button" onclick="javascript:history.go(-1)"  /><span class="uparrow icon"></span>返回上一页</button>
                    	</td>
                    </tr>
                    </table>
	<input type="hidden" name="h_id" value="<?php echo $result['commodity_id']?>">
                </form>
              </div>
       </div>           
</div>
<!--主体结束-->
<script type="text/javascript">
function showIndus(indus_pid){	
var service_id = parseInt(13)+0;	
if(indus_pid){			
$.post('index.php?do=model&model_id=6&view=edit&service_id='+service_id, {ajax:"show_indus",indus_pid: indus_pid}, function(html){
var str_data = html;				
if (trim(str_data) == '') {
$("#indus_id").html("<option value='-1'> 请选择子行业 </option>");
}
else {
$("#indus_id").html(str_data);					
}
},'text');
}
}
</script>
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
</body>
</html>