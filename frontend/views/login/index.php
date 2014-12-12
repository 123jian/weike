<div class="wrapper">
    <div class="container_24">
        <section class="clearfix section">
        	<div class="box model blue ">
        		<div class="inner">
            <header class="box_header clearfix">
            	<div class="grid_5 alpha omega">
                	<h1 class="box_title"><span>登录</span> Login</h1>
</div>
<div class="grid_18">
<nav class="box_nav clearfix">
<ul> 
                			<li><a href="/weike/index.php?do=register&refer=http://127.0.0.1/weike/index.php?do=help">无账号？现在去注册</a></li>
</ul>
</nav>
</div>
            </header>
 
            <div class="box_detail clearfix po_re box">
            	<div class="pad10">
            		<div class="messages m_warn clearfix">
            			<span class="icon16 ">友情提示</span>
 您所访问的页面需要登录</div>
</div>
            	<div class="clear"></div>
                <div class="grid_17">
                    <!--from表单 start-->
                    <div class="form_box clearfix border_n">
                        <form action="index.php?r=login/login" method="post" id="login_frm" name="login_frm">
                            <input type="hidden" name="formhash" id="formhash" value="ce9abd">
<input type="hidden" name="hdn_refer" id="hdn_refer" value="http://127.0.0.1/weike/index.php?do=help">
<input type="hidden" name="handlekey" value="login_frm1"><!--账号-->
                            <div class="rowElem clearfix po_re">
                                <label class="grid_4">
                                  账　号：                                </label>
                                <div class="grid_10">
                                	<input style="width:200px;" type="text" value="手机号/邮箱/用户名" class="txt txt_input" size="20" autocomplete="off" name="txt_account" id="txt_account" limit="required:true;len:2-20" msg="用户名输入错误" title="用户名可以为中文!" msgArea="login_account_msg" />
<span class="msg" id="login_account_msg"></span>
                                </div>

                            </div>

                            <div class="rowElem clearfix po_re">
                                <label class="grid_4">
                                    密　码：                                </label>
                                <div class="grid_10">
                                	<input type="text" style="width:200px;" id="txt_password" name="txt_password" value="密码不可以为空" style="" class="txt_input txt" original-title="">
                                    <input class="txt_input txt" style="width:200px;display:none;" type="password" name="pwd_password" id="pwd_password" maxlength="20" limit="required:true;len:6-20" msg="密码长度不能低于6位！" title="密码长度为6-20位" msgArea="login_password_msg" />
<span class="msg" id="login_password_msg"></span>
                                </div>
                                
                            </div>
                            <div>
                            
</div>
                            <div class="mt_20 prefix_4 ml_5">
                                <button type="submit" onclick="return user_login();" class="button" id="user_login_btn">
                                    <span class="key icon"></span>
                                    登录　 
                                </button> 　　&gt;&gt;<a href="index.php?r=get_password" target="_blank">找回密码</a>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <div class="grid_7 omega border_l_c">
                    <div class="pad10">

                        <div class=" pl_20">
                            <span>通过合作网站直接登录</span>
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sina" alt="新浪微博" title="新浪微博">
<img src="resource/img/ico/sina_t.gif" alt="新浪微博" title="新浪微博">
</a>
<a href="index.php?do=oauth_login&type=sina" class="ml_5">新浪微博登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=ten" alt="腾讯微博" title="腾讯微博">
<img src="resource/img/ico/ten_t.gif" alt="腾讯微博" title="腾讯微博">
</a>
<a href="index.php?do=oauth_login&type=ten" class="ml_5">腾讯微博登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=qq" alt="QQ账号" title="QQ账号">
<img src="resource/img/ico/qq_t.gif" alt="QQ账号" title="QQ账号">
</a>
<a href="index.php?do=oauth_login&type=qq" class="ml_5">QQ账号登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=taobao" alt="淘宝" title="淘宝">
<img src="resource/img/ico/taobao_t.gif" alt="淘宝" title="淘宝">
</a>
<a href="index.php?do=oauth_login&type=taobao" class="ml_5">淘宝登录 </a>
</div>
                   			
 <div class="mt_10">
<a href="index.php?do=oauth_login&type=sohu" alt="搜狐微博" title="搜狐微博">
<img src="resource/img/ico/sohu_t.gif" alt="搜狐微博" title="搜狐微博">
</a>
<a href="index.php?do=oauth_login&type=sohu" class="ml_5">搜狐微博登录 </a>
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
var inter = "1";
    $("#txt_account").focus(function(){
        var content = $("#txt_account").val();
        if (content == "手机号/邮箱/用户名"||content=="填写您的用户名") {
            $("#txt_account").val("");
        }
    });
    
    $("#txt_account").blur(function(){
        var content = $("#txt_account").val();
inter==1?val="手机号/邮箱/用户名":val="填写您的用户名";
        if (!content) {
            //$("#txt_account").val(val);
        }
    });
    
    $("#txt_password").focus(function(){
        var content = $("#pwd_password").val();
        $(this).hide();
$("#pwd_password").show();
$("#pwd_password")[0].focus();
        if (content == L.password_not_empty) {
        	$("#txt_account").val("");
        }
    });
    
    $("#pwd_password").blur(function(){
        var content = $("#pwd_password").val();
        if (!content) {
            $(this).hide();
            $('#txt_password').show();
        }
    });
    
    
    //登录
    
    function user_login(){ 
        if (checkForm(document.getElementById("login_frm"), false)) {
        	//login_frm.submit();
        	showWindow('login_frm1', 'login/login_frm', 'post',0,{cover:1},'hide()');
        	
        }
        return false;
    }
    
    function hide(){
    	//hideWindow('login_frm1');
    }
</script>

