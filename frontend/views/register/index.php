<?php
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


?>
<div class="wrapper">
<div class="container_24">
    	<section class="clearfix section">
        	<div class="box model green ">
        		<div class="inner">
            		<header class="box_header clearfix ">
            			<div class="grid_5 alpha omega">
            				<h1 class="box_title"><span>ע ��</span> Register</h1>
</div>
<div class="grid_18">
<nav class="box_nav clearfix">
<ul> 
                					<li><a href="index.php?do=login&ac_type=reg">���˺ţ�����ȥ��¼</a></li>
</ul>
</nav>
</div>
</header>
        			<div class=" box_detail clearfix po_re box pt_10 pl_5">
            			<div class="grid_17">
                		<!--from�� start-->
                		<div class="form_box clearfix border_n">
		
<?php $form  = ActiveForm::begin([
		        "action" => 'index.php?r=register/register_pro',
                        "method"=>'post',
                        "id"=>'register_frm',
                ]); ?>							
                    		<!--<form action="index.php?r=register/register_pro" method="post" id="register_frm" name="register_frm">-->
								
                        			<input type="hidden" name="formhash" id="formhash" value="ce9abd">
                        			<input type="hidden" name="hdn_refer" id="hdn_refer" value="index.php">
<input type="hidden" name="handlekey" value="register_frm1"><!--�˺�-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			�ˡ��� �ţ�                            			</label>
                            			<div class="fl_l ">
                                			<input type="text" class="txt txt_input" autocomplete="off" name="txt_account" id="txt_account" limit="required:true;len:2-20;type:string;general:true" msg="�û�����������" ajax="index.php?do=register&check_username=" title="2-20���ַ����ߺ��֣��Ƽ�ʹ�����Ļ�Ա����" msgArea="login_account_msg" style="width:200px;" />
                            				<span class="msg" id="login_account_msg"><i></i></span>
</div>

                        			</div>

                        		<!--end �˺�--><!--����-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			�ܡ� ���룺                            			</label>
                            			<div class="fl_l  ">
                                			<input class="txt_input" onKeyup="pwStrength(this.value)" style="width:200px;" type="password" name="pwd_password" id="pwd_password" maxlength="20" limit="required:true;len:6-20" msg="������������" title="6-20���ַ�����ʹ����ĸ�����ֻ���ŵ��������" msgArea="password_msg"/>
                            				<span class="msg" id="password_msg"></span>
</div>

                        			<div class="clear"></div>
<!--����ǿ��-->

<div class="prefix_4">
                            		 	<div id="pwdStrength" class=" msg pw_strength">
                                		<div class="pw_letter">
                                			<span class="selected">��</span>
<span>��</span>
<span>ǿ</span>
</div>
                           			 	</div>

</div>
                        			</div>
<!--ǿ��end-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			ȷ�� ���룺                            			</label>
                            			<div class="fl_l">
                                			<input class="txt_input" style="width:200px;" type="password" name="pwd_password2" id="pwd_password2" maxlength="20" limit="required:true;equals:pwd_password" msg="�ظ����벻��ȷ��" title="����һ������" msgArea="password2_msg"/>
                            				<span class="msg" id="password2_msg"></span>
</div>

                        			</div> 
                        		<!--end ����-->
<!--����-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			�ʡ� ���䣺                            			</label>
                            			<div class="fl_l">
                                			<input class="txt_input" style="width:200px;" autocomplete="off" type="text" class="txt" name="txt_email" id="txt_email"limit="type:email;required:true;len:6-50" msg="����������ʵ�������ַ��" title="�����������õ�����" ajax="index.php?do=register&check_email=" msgArea="email_msg"/>
                            				<span class="" id="email_msg"></span>
</div>

                        			</div>
                        	<!--end ����-->					

<!--��֤��-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			�� &nbsp;&nbsp;֤&nbsp;&nbsp;�룺
<!--��֤��-->

                                                </label>
                            			<div class="grid_8 alpha omega po_re" >
   <!--  <input style="width:65px;" class="fl_l txt_input" name="txt_code" type="text" 
size="8" id="txt_code" limit="required:true;len:4" msg="��֤�����!"msgArea="secode_msg"
ajax="index.php?do=ajax&view=code&txt_code=" >


<div id="show_secode_menu_content" class="hidden secode_box">

			<!--
 				<img id="secode_img" src="secode_show.php?sid=" onclick="document.getElementById('secode_img').src='secode_show.php?sid='+Math.random(); return false;">
 				<a class="font14" href="#" onclick="document.getElementById('secode_img').src='secode_show.php?sid='+Math.random(); return false;">��һ��</a>
<span class="" id="secode_msg"></span>
-->

 	        <a id="show_secode" href='index.php?do=ajax&view=menu&ajax=show_secode'></a>
                            				
</div>
                            			
                        			</div>						
                        	<!--end ��֤��-->

                        <div class="mt_20 prefix_4 ml_5">
                            <button type="submit" class="button" onclick="return user_register();">
                                <span class="clock icon"></span>
                                ע ��                            </button>
                        </div>

                        <p class="mt_20 prefix_4 ml_5">
                            <input  name="inputtext" type="checkbox" checked="checked" id="inputtext" limit="required:true"
msg="������ͬ��ע��Э��" msgArea="login_msg"/> &nbsp;�����Ķ�������<a  class="agreement_link" href="" target="_blank">ע��Э��</a>�Ͱ�Ȩ����                        	<span id="login_msg"></span>
</p>
                   <?php $form=ActiveForm::end(); ?>
<div class="agreement_part clearfix" style="display:none;">
<p>ע��Э��<br /></p>
</div>
                </div>
            </div>
            <div class="grid_6 omega border_l_c">
                    <div class="pad10">

                     <div class=" pl_20">
                        <span>ͨ��������վֱ�ӵ�½KPPW</span>
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sina" alt="����΢��" title="����΢��">
<img src="resource/img/ico/sina_t.gif" alt="����΢��" title="����΢��">
</a>
<a href="index.php?do=oauth_login&type=sina" class="ml_5">����΢����¼</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=ten" alt="��Ѷ΢��" title="��Ѷ΢��">
<img src="resource/img/ico/ten_t.gif" alt="��Ѷ΢��" title="��Ѷ΢��">
</a>
<a href="index.php?do=oauth_login&type=ten" class="ml_5">��Ѷ΢����¼</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=qq" alt="QQ�˺�" title="QQ�˺�">
<img src="resource/img/ico/qq_t.gif" alt="QQ�˺�" title="QQ�˺�">
</a>
<a href="index.php?do=oauth_login&type=qq" class="ml_5">QQ�˺ŵ�¼</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=taobao" alt="�Ա�" title="�Ա�">
<img src="resource/img/ico/taobao_t.gif" alt="�Ա�" title="�Ա�">
</a>
<a href="index.php?do=oauth_login&type=taobao" class="ml_5">�Ա���¼</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sohu" alt="�Ѻ�΢��" title="�Ѻ�΢��">
<img src="resource/img/ico/sohu_t.gif" alt="�Ѻ�΢��" title="�Ѻ�΢��">
</a>
<a href="index.php?do=oauth_login&type=sohu" class="ml_5">�Ѻ�΢����¼</a>
</div>
                   			
                    </div>
                </div>
            </div>
        				</div>
</div>
</div>
        </section>
        <div id="login_msg">
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<script type="text/javascript">
   In('form');
//ע��
function user_register(){
    var i = checkForm(document.getElementById("register_frm"));
    if (i) {
        showWindow('register_frm1', 'register_frm', 'post',0,{cover:1});
    }else{
        return false;
    }
}

$("#txt_code").focus(function(){
$("#show_secode_menu_content").removeClass("hidden");
});
$(".agreement_link").toggle(function(){
$(".agreement_part").show();
},function(){
$(".agreement_part").hide();
});
function checkStrong(sPW){
//if (sPW.length < 3){
//Modes=1;
//}else{
var pwLength = 	sPW.length;
  var patEn = /[a-zA-Z]/;
  var patnum = /[0-9]/;
  var speChar = /[`~!@#$\^&\*\(\)=\|{}':;',\/\?\[\]\.<>]/;
  var isEn = patEn.test(sPW);
  var isNum = patnum.test(sPW);
  var isSpe = speChar.test(sPW);
  Modes = getStrong(isEn,isNum,isSpe,pwLength);

//}
 return Modes; 
}

function getStrong (isEn,isNum,isSpe,pwLength){
if (isEn && isNum && isSpe && (pwLength>6)){
var setModes = 3;
}else{
var setModes = 2;
if((isEn && isNum)||(isNum && isSpe)||(isEn&&isSpe)){
var setModes = 2;
}else{
var setModes = 1;
}
}
return setModes;
}

function pwStrength(pwd){ 
  if (pwd==null||pwd==""){ 
  	S_level = 0;
  } else{ 
  S_level=checkStrong(pwd); 
  $("#pwdStrength span:lt("+S_level+")").addClass('selected');
  $("#pwdStrength span:gt("+(S_level-1)+")").removeClass('selected'); 
  } 

}

</script>

