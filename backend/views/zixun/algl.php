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
    	<h1>任务管理</h1>
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
           
    <form action="index.php?r=zixun/sos" method="post">

<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
	<th>任务编号</th>
	<td><input type="text" value="" name="de_id" class="txt"/></td>
	<th>任务标题</th>
	<td><input type="text" value="" name="de_title" class="txt"/> 支持模糊查询</td>
</tr>
<tr>
<th>请选择任务状态</th>
	<td>
	<select class="ps vm" name="state" id="catid">
		<option value=""  selected="selected" >全部</option>
		<option value="0"  >未审核</option>
		<option value="1"  >已审核</option>
		<option value="2"  >已完成</option>
		<option value="3"  >未付款</option>
		<option value="4"  >已付款</option>
		<option value="5"  >交付中</option>
	</select>
	</td>       
	<td>
        <button class="pill" type="submit" value="搜索" name="sbt_search">
        <span class="magnifier icon">&nbsp;</span>搜索</button>
	</td>
                        </tr>
                    </tbody>
                </table>
  </form>

        </div>
    </div>
    <!--搜索结束-->
    
    <div class="box list">
    	<div class="title"><h2>任务列表</h2></div>
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
					foreach($model as $k=>$v){		
				?>
                  <tr class="item">
                 	<td class="td25">
					<input type="checkbox" id="cho" name="ch"  value="<?php echo $v['mi_id'];?>" class="checkbox"><?php echo $v['mi_id'];?>
					</td>

                    <td class="td28">
					<?php echo $v['de_title'];?>
					</td>
                    <td>￥<?php echo $v['mi_money'];?></td>
                    <td><?php echo $v['mi_user'];?></td>
					<td>
						<?php 
							if($v['mi_shtype']==0){
								echo"未审核";
							}elseif($v['mi_shtype']==1){
								echo"已审核";
							}elseif($v['mi_shtype']==2){
								echo"已完成";
							}elseif($v['mi_shtype']==3){
								echo"未付款";
							}elseif($v['mi_shtype']==4){
								echo"已付款";
							}elseif($v['mi_shtype']==5){
								echo"交付中";
							}
						?>
					</td>
                    <td><a href="index.php?r=zixun/see&id=<?php echo $v['mi_id'];?>"></span>查看</a><a href="index.php?r=zixun/shenhe&id=<?php echo $v['mi_id'];?>">审核</a></td>
                  </tr>
              
                   <?php } ?>      
                                    
                  <tr>
                    <td colspan="7">
                    <div class="page fl_right"><?= LinkPager::widget(['pagination'=>$pages]);?></div>
                    
                    <div class="clearfix">
                  		<input type="checkbox"  onclick="alla()" id="cho" name="ch"/>
                        <label for="checkbox">全选</label>

                        <input type="hidden" name="sbt_action" class="sbt_action"/>
						
                        <button type="submit" value="批量删除" id="cho" name="ch" onclick="dela()" class="pill negative" ><span class="icon trash"></span>批量删除</button>
                     <!--     <button type="submit" value="批量审核" onclick="shenhe()"  class="positive pill negative"><span class="icon check">&nbsp;</span>批量审核</button>-->
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



</body>
</html>

<script type="text/javascript" src="./jq.js"></script>
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
		//location.href="index.php?r=zixun/dele&id="+id;
		 top.location = "index.php?r=zixun/dele&id="+id;
	}


	function shenhe(){
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
			alert("请选择要审核的数据");
			return false;
		}
		id = id.substring(0,id.length-1);
		//alert(id);
		//location.href="index.php?r=zixun/dele&id="+id;
		 top.location = "index.php?r=zixun/shenhe&id="+id;
	}

//-->
</script>
