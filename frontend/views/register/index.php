<div class="wrapper">
<div class="container_24">
    	<section class="clearfix section">
        	<div class="box model green ">
        		<div class="inner">
            		<header class="box_header clearfix ">
            			<div class="grid_5 alpha omega">
            				<h1 class="box_title"><span>注 册</span> Register</h1>
</div>
<div class="grid_18">
<nav class="box_nav clearfix">
<ul> 
                					<li><a href="index.php?do=login&ac_type=reg">有账号？现在去登录</a></li>
</ul>
</nav>
</div>
</header>
        			<div class="box_detail clearfix po_re box pt_10 pl_5">
            			<div class="grid_17">
                		<!--from表单 start-->
                			<div class="form_box clearfix border_n">
                    			<form action="index.php?do=register" method="post" id="register_frm" name="register_frm">
                        			<input type="hidden" name="formhash" id="formhash" value="ce9abd">
                        			<input type="hidden" name="hdn_refer" id="hdn_refer" value="index.php">
<input type="hidden" name="handlekey" value="register_frm1"><!--账号-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			账　　 号：                            			</label>
                            			<div class="fl_l ">
                                			<input type="text" class="txt txt_input" autocomplete="off" name="txt_account" id="txt_account" limit="required:true;len:2-20;type:string;general:true" msg="用户名输入有误！" ajax="index.php?do=register&check_username=" title="2-20个字符或者汉字，推荐使用中文会员名。" msgArea="login_account_msg" style="width:200px;" />
                            				<span class="msg" id="login_account_msg"><i></i></span>
</div>

                        			</div>

                        		<!--end 账号--><!--密码-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			密　 　码：                            			</label>
                            			<div class="fl_l  ">
                                			<input class="txt_input" onKeyup="pwStrength(this.value)" style="width:200px;" type="password" name="pwd_password" id="pwd_password" maxlength="20" limit="required:true;len:6-20" msg="密码输入有误！" title="6-20个字符，请使用字母加数字或符号的组合密码" msgArea="password_msg"/>
                            				<span class="msg" id="password_msg"></span>
</div>

                        			<div class="clear"></div>
<!--密码强度-->

<div class="prefix_4">
                            		 	<div id="pwdStrength" class=" msg pw_strength">
                                		<div class="pw_letter">
                                			<span class="selected">弱</span>
<span>中</span>
<span>强</span>
</div>
                           			 	</div>

</div>
                        			</div>
<!--强度end-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			确认 密码：                            			</label>
                            			<div class="fl_l">
                                			<input class="txt_input" style="width:200px;" type="password" name="pwd_password2" id="pwd_password2" maxlength="20" limit="required:true;equals:pwd_password" msg="重复密码不正确！" title="再输一次密码" msgArea="password2_msg"/>
                            				<span class="msg" id="password2_msg"></span>
</div>

                        			</div> 
                        		<!--end 密码-->
<!--邮箱-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			邮　 　箱：                            			</label>
                            			<div class="fl_l">
                                			<input class="txt_input" style="width:200px;" autocomplete="off" type="text" class="txt" name="txt_email" id="txt_email"limit="type:email;required:true;len:6-50" msg="请输入您真实的邮箱地址！" title="请输入您常用的邮箱" ajax="index.php?do=register&check_email=" msgArea="email_msg"/>
                            				<span class="" id="email_msg"></span>
</div>

                        			</div>
                        	<!--end 邮箱-->					

<!--验证码-->
                        			<div class="rowElem clearfix po_re">
                            			<label class="grid_4">
                                			验 &nbsp;&nbsp;证&nbsp;&nbsp;码：                            			</label>
                            			<div class="grid_8 alpha omega po_re" >
                                			<input style="width:65px;" class="fl_l txt_input" name="txt_code" type="text" 
size="8" id="txt_code" limit="required:true;len:4" msg="验证码错误!"msgArea="secode_msg"
ajax="index.php?do=ajax&view=code&txt_code=" >
 			<div id="show_secode_menu_content" class="hidden secode_box">
 				<img id="secode_img" src="secode_show.php?sid=" onclick="document.getElementById('secode_img').src='secode_show.php?sid='+Math.random(); return false;">
 				<a class="font14" href="#" onclick="document.getElementById('secode_img').src='secode_show.php?sid='+Math.random(); return false;">换一组</a>
<span class="" id="secode_msg"></span>
</div>
 	        <a id="show_secode" href='index.php?do=ajax&view=menu&ajax=show_secode'></a>
                            				
</div>
                            			
                        			</div>						
                        	<!--end 验证码-->

                        <div class="mt_20 prefix_4 ml_5">
                            <button type="submit" class="button" onclick="return user_register();">
                                <span class="clock icon"></span>
                                注 册                            </button>
                        </div>

                        <p class="mt_20 prefix_4 ml_5">
                            <input  name="inputtext" type="checkbox" checked="checked" id="inputtext" limit="required:true"
msg="您必须同意注册协议" msgArea="login_msg"/> &nbsp;我已阅读并接受<a  class="agreement_link" href="" target="_blank">注册协议</a>和版权声明                        	<span id="login_msg"></span>
</p>
                    </form>
<div class="agreement_part clearfix" style="display:none;">
<p>注册协议<br /></p>
</div>
                </div>
            </div>
            <div class="grid_6 omega border_l_c">
                    <div class="pad10">

                     <div class=" pl_20">
                        <span>通过合作网站直接登陆KPPW</span>
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sina" alt="新浪微博" title="新浪微博">
<img src="resource/img/ico/sina_t.gif" alt="新浪微博" title="新浪微博">
</a>
<a href="index.php?do=oauth_login&type=sina" class="ml_5">新浪微博登录</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=ten" alt="腾讯微博" title="腾讯微博">
<img src="resource/img/ico/ten_t.gif" alt="腾讯微博" title="腾讯微博">
</a>
<a href="index.php?do=oauth_login&type=ten" class="ml_5">腾讯微博登录</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=qq" alt="QQ账号" title="QQ账号">
<img src="resource/img/ico/qq_t.gif" alt="QQ账号" title="QQ账号">
</a>
<a href="index.php?do=oauth_login&type=qq" class="ml_5">QQ账号登录</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=taobao" alt="淘宝" title="淘宝">
<img src="resource/img/ico/taobao_t.gif" alt="淘宝" title="淘宝">
</a>
<a href="index.php?do=oauth_login&type=taobao" class="ml_5">淘宝登录</a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sohu" alt="搜狐微博" title="搜狐微博">
<img src="resource/img/ico/sohu_t.gif" alt="搜狐微博" title="搜狐微博">
</a>
<a href="index.php?do=oauth_login&type=sohu" class="ml_5">搜狐微博登录</a>
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
    //注册
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

