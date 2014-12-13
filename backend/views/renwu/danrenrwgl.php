<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
use yii\widgets\LinkPager;

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="../../resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="../../resource/js/jquery.js"></script>
<script type="text/javascript" src="tpl/default/js/jq.js"></script>
<script type="text/javascript" src="../../resource/js/system/keke.js"></script>
<script type="text/javascript" src="../../resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div> 
 
<div class="page_title">	
    	<h1>单人悬赏管理</h1>
         <div class="tool">
         	<a href="index.php?do=model&model_id=1&view=list&status=0" class="here">任务列表</a>
<!--	<a href="index.php?do=model&model_id=1&view=config">任务配置</a>-->
 </div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
    <form action="index.php?r=renwu/danrenrwgl" method="post">
<table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>任务编号</th>
                            <td><input type="text" value="" name="task_id" id="task_id" class="txt"/></td>
                            <th>任务标题</th>
                            <td><input type="text" value="" name="task_title" id="task_title" class="txt"/> 支持模糊查询</td>
                             <th></th><td>
                             	<button class="pill" type="submit" value="搜索" name="sbt_search">
                            		<span class="magnifier icon">&nbsp;</span>搜索</button></td>
                             </td>
 	
</tr>
                        <tr>
                            <th>请选择任务状态</th>
                            <td>
                            	<select class="ps vm" name="task_status" id="catid" onchange="statusJump(this.value)">
                            		<option value=""  selected="selected" >全部</option>
                            	    <option value="0"  >未付款</option>
    <option value="1"  >待审核</option>
    <option value="2"  >投稿中</option>
    <option value="3"  >任务选稿</option>
    <option value="4"  >发起投票</option>
    <option value="5"  >公示中</option>
    <option value="6"  >交付中</option>
    <option value="7"  >冻结</option>
    <option value="8"  >结束</option>
    <option value="9"  >失败</option>
    <option value="10"  >审核失败</option>
    <option value="11"  >仲裁</option>
    <option value="13"  >交付冻结</option>
	
</select>
</td>
<th>结果排序</th>
<td>

<select name="ord[]" id="ord1">
                                <option value="task_id"  selected="selected">默认排序</option>
                                <option value="start_time" id="tim" >发布时间</option>
                                </select>
                                <select name="ord[]" onchange="orderJump(this.value)" id="ord2">
                                <option selected="selected"  value="desc">递减</option>
                                <option  value="asc">递增</option>
                                </select>
</td>
                            <th>显示结果</th>
                            <td><select name="page_size" id="pag" onchange="pageJump(this.value)">
<option value="5" selected="selected">每页显示5</option>
<option value="10" >每页显示10</option>
<option value="15">每页显示15</option>
</select>
                              
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
    
    <div class="box list">
    	<div class="title"><h2>单人悬赏任务列表</h2></div>
        <div class="detail">
        	<form action="#" id='frm_list' method="post">
        	<input type="hidden" value="1" name="page">
<input type="hidden" name="w['page_size']" value="10">
               <div id="ajax_dom"><input type="hidden" value="1" name="page">
               <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="8%">ID</th>
                    <th width="27%">任务标题</th>
                    
                    <th width="15%">任务金额</th>
<th width="10%">发布者</th>
<th width="10%">任务状态</th>
                    <th width="25%">处理</th>
                  </tr>
                  <?php 
                  //print_r($arr);
                  foreach ($arr as $v) {
                      
                  ?>
                  <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb" class="checkbox" value="<?php
                        echo $v['task_id'];
                        ?>" class="checkbox">
                        <?php
                        echo $v['task_id'];
                        ?>
                        </td>
                    <td class="td28">
                    	<a href="../../index.php?do=task&task_id=70" target="_blank"><?php
                        echo $v['task_title'];
                        ?></a>
</td>
                   
                    <td><?php
                        echo $v['task_cash'];
                        ?></td>
                    <td><?php
                        echo $v['username'];
                        ?></td>
 <td>
     <?php
     if($v['is_top']==0){
         echo "失败";
     }else{
         echo "成功";
     }
     ?>
     </td>
                    <td>
                    	
<a href="index.php?r=renwu/danrenrwview&id=<?php echo $v['task_id']; ?>" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?r=renwu/delrenwu&id=<?php echo $v['task_id']; ?>" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                          <?php
                          }
                          ?>          
                  <tr>
                    <td colspan="7">
                    <div class="page fl_right"><span>
<style>
.page{float:right;}
.page li{float:left;}
</style>
<?= LinkPager::widget(['pagination' => $pages]) ?> </span></div>
                    
                    <div class="clearfix">
                  		<input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>
                        <label for="checkbox">全选</label>
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button type="button" value="批量删除" onclick="del();" class="pill negative" ><span class="icon trash"></span>批量删除</button>
                        <button type="button" value="批量审核" onclick="batchact();"  class="positive pill negative"><span class="icon check">&nbsp;</span>批量审核</button>
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
    <script type="text/javascript">
    function checkdel(){
		//接收id
		var id = "";
		var ch = document.getElementsByName('ckb');
		
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
		
	id = id.substring(0,id.length-1,1);
	//alert(id);return false;
	location.href="index.php?r=renwu/delrenwu&id="+id;
}
    function checkall(){        
        var pro=document.getElementsByName('ckb');
        for (var i=0;i<pro.length ;i++ )
        {
            if(pro[i].checked==true)
            {
                    pro[i].checked=false;
            }else{
                    pro[i].checked=true;
            }
        }
       
    }
    function del(){
        var id=new Array();
        var pro=document.getElementsByName("ckb");
        var flag=0;
        for (var i=0;i<pro.length ;i++ )
        {
                if (pro[i].checked==true)
                {
                        id[flag]=pro[i].value;
                        flag++;
                }
        }
        if (flag==0)
        {
                alert("请选择要删除的数据！");
                return false;
        }      
        var str=id.join(',');
        //alert(typeof(str));
       // alert(str)
        location.href="index.php?r=renwu/delrenwu&id="+str;
    }
    function batchact(){
        var id=new Array();
        var pro=document.getElementsByName("ckb");
        var flag=0;
        for (var i=0;i<pro.length ;i++ )
        {
                if (pro[i].checked==true)
                {
                        id[flag]=pro[i].value;
                        flag++;
                }
        }
        if (flag==0)
        {
                alert("请选择要修改的数据！");
                return false;
        }      
        var str=id.join(',');
        //alert(typeof(str));
      // alert(str)
       location.href="index.php?r=renwu/uprenwu&id="+str;
    }
    </script>
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
<script type="text/javascript">
var task_id=document.getElementById('task_id').value;

var task_title=document.getElementById('task_title').value;
var task_status=document.getElementById('task_status').value;
var ord1=document.getElementById('ord1').value;
var ord2=document.getElementById('ord2').value;
var pag=document.getElementById('pag').value;


var url = 'index.php?r=renwu/drenrwgl&task_id='+task_id+'&task_title='+task_title+'&task_status='+task_status+'&ord1='+ord1+'&ord2='+ord2+'&pag='+pag;

function statusJump(task_status){
var task_id=document.getElementById('task_id').value;

var task_title=document.getElementById('task_title').value;
//var task_status=document.getElementById('task_status').value;
var ord1=document.getElementById('ord1').value;
var ord2=document.getElementById('ord2').value;
var pag=document.getElementById('pag').value;
window.location.href = 'index.php?r=renwu/drenrwgl&task_id='+task_id+'&task_title='+task_title+'&task_status='+task_status+'&ord1='+ord1+'&ord2='+ord2+'&pag='+pag;
}
function orderJump(value){
    
var task_id=document.getElementById('task_id').value;

var task_title=document.getElementById('task_title').value;
var task_status=document.getElementById('catid').value;


var pag=document.getElementById('pag').value;

//var ord1 = $("#ord1").children("option:selected").val();//selected的值
var ord1=document.getElementById('ord1').value;
//alert(ord1)
window.location.href= 'index.php?r=renwu/drenrwgl&task_id='+task_id+'&task_title='+task_title+'&task_status='+task_status+'&pag='+pag+'&ord1='+ord1+'&ord2='+value;
}
function pageJump(value){
    
var task_id=document.getElementById('task_id').value;

var task_title=document.getElementById('task_title').value;

var task_status=document.getElementById('catid').value;

var ord1=document.getElementById('ord1').value;

var ord2=document.getElementById('ord2').value;


window.location.href= 'index.php?r=renwu/drenrwgl&task_id='+task_id+'&task_title='+task_title+'&task_status='+task_status+'&ord1='+ord1+'&ord2='+ord2+'&pag='+value;

}
</script>
