<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="./resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="./resource/js/jquery.js"></script>
<script type="text/javascript" src="./resource/js/system/keke.js"></script>
<script type="text/javascript" src="./resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div> 
 
<div class="page_title">	
    	<h1>帮助管理</h1>
         <div class="tool">
            <a href="index.php?r=zixun/bzgl" class="here" >帮助列表</a>
            <a href="index.php?r=zixun/bzgl_add" >帮助添加</a>
    	</div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?r=zixun/bzgl_search" method="post" name="s" id="sl">
            	<input type="hidden" name="do" value="article">
<input type="hidden" name="view" value="list">
<input type="hidden" name="type" value="help">
<input type="hidden" name="page" value="1">
 
 
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>作者</th>
                            <td><input type="text" value="" name="w[username]" class="txt"/></td>
                            <th>文章标题</th>
                            <td colspan="3"><input type="text" value="" name="w[art_title]" class="txt"/>*支持模糊查询</td>
                            
</tr>
                      
                        <tr> 
                            <th>栏目</th>
                            <td>
                            	<select class="ps vm" name="w[art_cat_id]" id="catid">
                            	<option value=100>帮助中心</option><option value=294>&nbsp;&nbsp;&nbsp; |-新手上路</option><option value=347>&nbsp;&nbsp;&nbsp;&nbsp; |--违规</option><option value=346>&nbsp;&nbsp;&nbsp;&nbsp; |--交易维权</option><option value=345>&nbsp;&nbsp;&nbsp;&nbsp; |--名词解答</option><option value=364>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---234</option><option value=327>&nbsp;&nbsp;&nbsp;&nbsp; |--账号管理</option><option value=312>&nbsp;&nbsp;&nbsp;&nbsp; |--如何支付</option><option value=311>&nbsp;&nbsp;&nbsp;&nbsp; |--如何赚钱</option><option value=310>&nbsp;&nbsp;&nbsp;&nbsp; |--相关认证</option><option value=298>&nbsp;&nbsp;&nbsp;&nbsp; |--注册登陆</option><option value=362>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---dddd</option><option value=297>&nbsp;&nbsp;&nbsp;&nbsp; |--提现充值</option><option value=296>&nbsp;&nbsp;&nbsp;&nbsp; |--账号安全</option><option value=293>&nbsp;&nbsp;&nbsp; |-常见问题</option><option value=326>&nbsp;&nbsp;&nbsp;&nbsp; |--交易付款</option><option value=319>&nbsp;&nbsp;&nbsp;&nbsp; |--账号充值</option><option value=291>&nbsp;&nbsp;&nbsp; |-威客商城</option><option value=325>&nbsp;&nbsp;&nbsp;&nbsp; |--威客服务</option><option value=324>&nbsp;&nbsp;&nbsp;&nbsp; |--威客作品</option><option value=323>&nbsp;&nbsp;&nbsp;&nbsp; |--商城规则</option><option value=290>&nbsp;&nbsp;&nbsp; |-任务大厅</option><option value=329>&nbsp;&nbsp;&nbsp;&nbsp; |--我是服务商</option><option value=328>&nbsp;&nbsp;&nbsp;&nbsp; |--我是买家</option><option value=309>&nbsp;&nbsp;&nbsp;&nbsp; |--支付汇款</option><option value=308>&nbsp;&nbsp;&nbsp;&nbsp; |--任务选标</option><option value=307>&nbsp;&nbsp;&nbsp;&nbsp; |--线下交易</option><option value=306>&nbsp;&nbsp;&nbsp;&nbsp; |--招标任务</option><option value=305>&nbsp;&nbsp;&nbsp;&nbsp; |--悬赏任务</option><option value=304>&nbsp;&nbsp;&nbsp;&nbsp; |--雇佣任务</option><option value=303>&nbsp;&nbsp;&nbsp;&nbsp; |--任务问题</option><option value=302>&nbsp;&nbsp;&nbsp;&nbsp; |--评价&等级</option><option value=301>&nbsp;&nbsp;&nbsp;&nbsp; |--参与任务</option><option value=300>&nbsp;&nbsp;&nbsp;&nbsp; |--任务中标</option>
</select>
</td>
<th>排序</th>
<td>
                                <select name="ord[]">
                                	<option value="art_id"  selected="selected">默认排序</option>
                                	<option value="pub_time" >发布时间</option>
                                </select>
                                <select name="ord[]">
                               		 <option selected="selected"  value="desc">递减</option>
                                	<option  value="asc">递增</option>
                                </select>
</td> 
                            <th>显示结果</th>
                            <td><select name="page_size">
<option value="10" selected="selected">每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
                              	<button class="pill" type="submit" value="搜索" name="sbt_search">
                            		<span class="icon magnifier"></span>搜索</button>
</td>
                        </tr>
                         
                        
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
    
    <div class="box list">
    	<div class="title"><h2>帮助列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
        		<div id="ajax_dom">
        		<input type="hidden" name="page" value="1">
              <table cellpadding="0" cellspacing="0">
                <thead>
                  <tr>
                    <th width="20">ID</th>
                    <th width="60">分类</th>
                    <th width="30%">帮助标题</th>
                    <th width="60">访问量</th>
                    <th width="60">发布者</th>
                    <th width="60">发布时间</th>
                    <th width="25%">操作</th>
                  </tr>
  </thead>
                  <tbody>
                      
<?php foreach ($model as $item) { ?>                 
                 <tr class="item">
                  <td><input type="checkbox" name="ckb[]" id="ckb" value="<?php echo $item['art_id']?>" class="checkbox"><?php echo $item['art_id']?></td>
                    <td class="td28 wraphide"><?php echo $item['cat_type']?></td>
                    <td>
                    	<a href="#" onclick="update(<?php echo $item['art_id']?>);"><?php echo $item['art_title']?></a>
</td>
                    <td class="wraphide"><?php echo $item['views']?></td>
                    <td class="wraphide"><a href="#" onclick="update(<?php echo $item['art_id']?>);"><?php echo $item['username']?></a></td>
                    <td class="ws_break"><?php echo $item['pub_time']?></td>
                    <td>
                    	 
<a href="../../index.php?do=help&spid=325&page=1" target="_blank" class="button"><span class="book icon"></span>浏览</a> 
<a href="#" class="button dbl_target" onclick="update(<?php echo $item['art_id']?>);"><span class="pen icon"></span>编辑</a>
<a href="#"  onclick="del(<?php echo $item['art_id']?>);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                      
<?php } ?>                       

        </tbody>
  <tfoot>
                  <tr>
                    <td colspan="7">
                    <div class="clearfix">
                  		<input type="checkbox" onclick="checkall(event);" id="checkbox" name="checkbox"/>
                        <label for="checkbox">全选</label><!-- 全选 -->
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
<button name="sbt_action" type="button" value="批量删除" onclick="pldel()" class="pill negative"><span class="icon trash"></span>批量删除</button>
                    </div>
                    </td>
                  </tr>
                </tfoot>
              </table>
  <div class="page">
      <?= LinkPager::widget(['pagination' => $pages]);?>

      
  </div>
  </div>
        	</form>
        </div>       
    </div>
<!--主体结束-->
<script type="text/javascript">
//编辑
function update(id){    
    var id=id;
    //alert(id);  
    location.href="index.php?r=zixun/bzgl_update&art_id="+id;     
}

//删除
function del(id){    
    var id=id;
    //alert(id);
    //return false;
    if(confirm('你确认删除操作？')){
      location.href="index.php?r=zixun/bzgl_del&art_id="+id;    
    }   
}

//批量删除
function pldel(){
    //alert(123);
    var str=document.getElementsByName('ckb[]');
    //alert(str);
    var length=str.length;
    //alert(length);
    var ids='';
    for(i=0;i<length;i++){
        if(str[i].checked==true){
            ids+=str[i].value+',';
        } 
    }
    //alert(ids);
    if(ids==''){
        alert('您没有选择任何操作项');
    }else if(confirm('你确认删除操作？')){
        location.href="index.php?r=zixun/bzgl_pldel&ids="+ids;        
    }
}


function createHtml(writedir,filename){
var url = "index.php?do=static&view=update&sbt_edit=1&write_dir="+writedir+"&file_name="+filename;
ajaxDialog(url);
}
 function ajaxDialog(url){
 	 art.dialog({
title: "静态文件更新",
content: "开始更新静态文件",
yesFn: function(){
var dia = this;
dia.content("静态文件更新中,请勿操作").lock();
$.getJSON(url,function(json){
if(json.status==1){dia.close();
art.dialog({icon: 'succeed',content: json.msg,time:3});
}else{art.dialog.alert(json.msg);}
return false;
})
 return false;
},
noFn :function(){this.close();return false;}
})
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
