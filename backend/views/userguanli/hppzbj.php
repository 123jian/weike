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
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>编辑互评列表</h2></div>
<div class="box tip clearfix p_relative" id="man_tips">
    			<div class="control"><a title=关闭 onclick="$('#man_tips').fadeOut();" href="javascript:void(0);"><b>×</b></a></div>
       			<div class="title"><h2>小提示</h2></div>
        		<div class="detail pad10">
            		<ul>
            				<li>角色雇主与买家等同，角色威客与卖家等同,前端显示会根据不同的角色显示对应的头衔与图片</li>
<li>好评，中评，差评均是百分比，是占任务总金额的百分比，范围在0-100</li>
<li>威客对雇主的评价是体现雇主的信誉，雇主对威客的评价是体现威客的能力</li>
<li>这里的"威客"，是指雇主对威客的评价；"雇主"，是指威客对雇主的评价</li>
            		</ul>
        		</div>
</div>

            <div class="detail">
               <form action="./index.php?r=userguanli/hppzup" method="post" name="frm1" id="frm1">
<input type="hidden" value="<?php echo $data[0]['mark_config_id']?>" name="hdn_mark_config_id">
<input type="hidden" value="<?php echo $data[0]['model_name']?>" name="obj_name">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  	<th scope="row" width="130" >模型类型</th>
<td>
<?php echo $data[0]['model_name']?></td>
  </tr>
  <tr>
                       <th scope="row">好评</th>
                        <td> <input type="text" class="txt" style="width:260px;" name="fds[good]" id="good" onkeyup="clearstr(this);" limit="type:int;between:0-100;required:true" value="<?php echo $data[0]['good']?>" msg=输入有误,超出长度 title=请输入int类型的数据,0-100 msgArea="txt_good_msg"/><span id="txt_good_msg">请输入0-100的数字</span></td>
                      </tr>
  <tr>
                       <th scope="row">中评</th>
                        <td> <input type="text" class="txt" style="width:260px;" value="<?php echo $data[0]['normal']?>" onkeyup="clearstr(this);" name="fds[normal]" id="phone" limit="type:int;between:0-100;required:true" msg=输入有误,超出长度  title=请输入int类型的数据,0-100 msgArea="txt_normal_msg"/><span id="txt_normal_msg">请输入0-100的数字</span>
</td>
                      </tr>
  <tr>
                       <th scope="row">差评</th>
                        <td> <input type="text" class="txt" style="width:260px;" name="fds[bad]" id="bad" onkeyup="clearstr(this);" value="<?php echo $data[0]['bad']?>" limit="type:int;between:0-100;required:true" msg=输入有误,超出长度  title=请输入int类型的数据,0-100 msgArea="txt_bad_msg"/><span id="txt_bad_msg">请输入0-100的数字</span> 
</td> 
  <tr>
                        <th scope="row">角色</th>
                        <td>
                          <p>                           <label>
                              <input type="radio"name="fds[type]"value="<?php echo $data[0]['type']?>"checked=checked>
  <?php if($data[0]['type']==1){ echo "威客";}else{ echo "雇主";}?></label>
   <span style="color:red;">温馨提示："威客"，是指雇主对威客的评价；"雇主"，是指威客对雇主的评价</span>
                            <br />
                        </p>
 
</td>
                      </tr>
           
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
<button type="submit" name="sbt_add"  value=提交 class="positive primary pill button"/>
<span class="check icon"></span>提交</button>

                            </div>
                        </td>
                      </tr>
  
                    </table>
                    
                </form>
        </div>
        
        
    </div>
 	<br/>
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
