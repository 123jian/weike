<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_main', '1417767990' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_K['charset'];?>">
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
<!--
<div class="po_ab fixed-right adv ">
<a href="#"><?php echo $_lang['ad_leasing'];?>w150xh90</a>
</div>
-->
<div class="page_title clearfix">
    <h1><?php echo $_lang['manage_index'];?></h1>
    <div class="tool">
    </div>
</div>
<div class="box tip clearfix p_relative" id="man_tips">
    <div class="control">
        <a href="javascript:void(0);" onclick="$('#man_tips').fadeOut();" title="<?php echo $_lang['close'];?>"><b>&times;</b></a>
    </div>
    <div class="title">
        <h2><?php echo $_lang['safe_report'];?></h2>
    </div>
    <div class="detail pad10">
        <ul>
            <li>
                <?php echo $_lang['suggest_rename_notice'];?>
            </li>
            <li>
                <?php echo $_lang['suggest_hide_notice'];?>
            </li>
        </ul>
    </div>
</div>
<div class="box user_quick clearfix">
    <div class="detail pad10">
        <ul>
            <li class="avatar">
                <a href="#" title="admin"><?php echo  keke_user_class::get_user_pic($admin_info['uid'],'small') ?></a>
            </li>
            <li class="name">
                <span><?php echo $_lang['good_morning'];?></span>，<?php echo $_lang['public_admin_uid'];?><b><?php echo $admin_info['username'];?></b>
                <span class="clock"> - <?php echo $_lang['today_is'];?><span id="date"><?php if(time()){echo date('Y-m-d H:i:s',time()); } ?></span></span>
            </li>
            <li class="statistics clearfix">
                <ul>
                    <li>
                        <a href="index.php?do=user&view=list" class="button"><span class="icon check">&nbsp;</span><?php echo $_lang['new_member'];?>(<?php echo $user_count?>)</a>
                    </li>
                    <li>
                    	<select id="task_add" onchange="jump_list(this.value);">
                    		<option >新增任务(<?php echo $task_all_count;?>)</option>
<?php if(is_array($model_list)) { foreach($model_list as $k => $v) { ?>
                    		<option value="<?php echo $k;?>"><?php echo $v['model_name']?>(<?php echo $task_count[$k]['count']?>)</option>
<?php } } ?>

                    	</select>
                    </li>
<li>
                        <a href="index.php?do=store&view=list" class="button"><span class="icon book">&nbsp;</span>店铺申请(<?php echo $apply_shop_count;?>)</a>
                    </li>
<li>
<select id="service_add" onchange="jump_list(this.value);">
                    		<option >新增商品(<?php echo $shop_all_count;?>)</option>
<?php if(is_array($shop_list)) { foreach($shop_list as $k => $v) { ?>
                    		<option value="<?php echo $k;?>"><?php echo $v['model_name']?>(<?php echo $shop_count[$k]['count']?>)</option>
<?php } } ?>
                    	</select>
                    </li>
                    <li>
                        <a href="index.php?do=finance&view=withdraw" class="button"><span class="icon home">&nbsp;</span><?php echo $_lang['withdraw_apply'];?>(<?php echo $withdraw_count?>)</a>
                    </li>
                    <li>
                        <a href="index.php?do=finance&view=recharge" class="button"><span class="icon rss">&nbsp;</span><?php echo $_lang['user_recharge'];?>(<?php echo $charge_count?>)</a>
                    </li>
                    <li>
                        <a href="index.php?do=user&view=suggest" class="button"><span class="icon mail">&nbsp;</span>建议(<?php echo $proposal_count?>)</a>
                    </li>
<li>
                        <a href="index.php?do=trans&view=report" class="button"><span class="icon mail">&nbsp;</span>举报(<?php echo $report_count?>)</a>
                    </li>
<li>
                        <a href="index.php?do=trans&view=rights" class="button"><span class="icon mail">&nbsp;</span>维权(<?php echo $right_count?>)</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="box">
    <div class="title">
        <?php echo $_lang['system_announcement'];?>
    </div>
    <div class="detail pad10">
        <ul>
            <script type="text/javascript" charset="gbk" src="<?php echo $sysinfo?>">
            </script>
        </ul>
    </div>
</div>
<div class="box">
    <div class="title">
        <?php echo $_lang['authorization_info'];?>
    </div>
    <div class="detail pad10">
        <ul>
            <li>
               <?php echo $_lang['version_number'];?> :	<?php echo P_NAME;?><?php echo KEKE_VERSION;?> <?php echo KEKE_RELEASE;?>
            </li>
            <li>
                <?php echo $_lang['auhorization_type'];?> :<span id='kekelic'></span>
            </li>
            <li>
                <?php if($lic) { ?><?php echo $_lang['authorization_code'];?> :<?php echo $str_lic?><?php } ?>
            </li>
        </ul>
    </div>
</div>
<div class="box">
    <div class="title">
        <?php echo $_lang['server_info'];?>
    </div>
    <div class="detail pad10">
        <ul>
         
            <li>
                <?php echo $_lang['server_software'];?><?php echo $_lang['zh_mh'];?>		<?php echo $sys_info['web_server'];?>
            </li>
            
            <li>
                MySQL <?php echo $_lang['support'];?><?php echo $_lang['zh_mh'];?> <?php echo $mysql_ver;?>-community
            </li>
            <li>
                PHP<?php echo $_lang['version'];?> <?php echo $_lang['zh_mh'];?> <?php echo PHP_OS;?>/PHP v<?php echo PHP_VERSION;?>
            </li>
          
            <li>
                <?php echo $_lang['server_max_upload_file'];?> : <?php if($sys_info ['file_uploads']) { ?>	<?php echo $sys_info['max_filesize'];?> <?php } else { ?><font color=red><?php echo $_lang['close']?> </font><?php } ?>
            </li>

 <li>
                 <?php echo $_lang['db_size'];?> : <?php echo $dbsize?> MB
            </li> 
 <li>
                 <?php echo $_lang['upload_size'];?> :	 <?php echo $file_size?> MB
            </li>

        </ul>
    </div>
</div>
<script type="text/javascript" src="<?php echo $notice?>" charset="gbk">
</script>
<script type="text/javascript">

function jump_list(model_id){
window.location.href = 'index.php?do=model&model_id='+model_id+'&view=list';
}
</script>
</div>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/<?php echo $language?>/script/lang.js"></script>
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
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
d.confirm("<?php echo $_lang['confirm'];?>" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("<?php echo $_lang['has_none_being_choose'];?>");
}
return false;
}
</script>
<?php if(KEKE_DEBUG) { ?>
<div
style="background-color: red; color: #fff; width: 400px; text-align: center;">
querys:
<?php echo db_factory::create()->get_query_num() ?>
&nbsp; times:
<?php echo kekezu::execute_time() ?>
</div>

<?php } ?>
</body>
</html>
<?php keke_tpl_class::ob_out();?>