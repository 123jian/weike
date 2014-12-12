<script type="text/javascript" src="tpl/default/js/jq.js"></script>
<script>
function getUrlParam(name)
{
var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
var r = window.location.search.substr(1).match(reg);  //匹配目标参数
if (r!=null) return unescape(r[2]); return null; //返回参数值
}
var key=getUrlParam('view');
$("#"+key).attr("class","selected")


</script>

<script type="text/javascript" src="tpl/default/js/jq.js"></script>
<script>
function getUrlParam(name)
{
var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
var r = window.location.search.substr(1).match(reg);  //匹配目标参数
if (r!=null) return unescape(r[2]); return null; //返回参数值
}
var key=getUrlParam('stut');
$("#"+key).attr("class","selected")


</script>
<style>
    ul li img{margin-right:5px;margin-bottom:5px;}
    .pic_small{float:left;}
</style>
        <div class="show_panel container_24 po_re">
        <div class="prefix_3 grid_21">
            <div class="panel clearfix box">
                <!--main content-->
                <div class="">
                    <!--header内容头部 start-->
                    <header class="clearfix box_header">
                        <h2 class="grid_4 alpha omega box_title t_c">头像设置</h2>
                        <div class="grid_17 alpha omega">
                            <nav class="box_nav">
                                <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 61px; height: 33px;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                                                                        <li class="selectedLava">
                                        <a href="index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose" original-title="选择头像">选择头像</a>
                                    </li>
                                                                        <li>
                                        <a href="index.php?do=user&amp;view=setting&amp;op=picture&amp;show=upload" original-title="上传头像">上传头像</a>
                                    </li>
                                                                    </ul>
                            </nav>
                        </div>
                        <div class="clear">
                        </div>
                    </header>
                    <!--header内容头部 end--><!--detail内容 start-->
                    <article class="box_detail">
                    	

                        <!--头像选择start-->
                        <div class="prefix_1 suffix_1">
                        	<h3 class="mb_10 border_b_c">系统头像</h3>
                               
                            <ul class="choose_tx clearfix mt_10 mb_20">
                                                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=1','url',false);">
                                    <img src="data/avatar/system/1_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=2','url',false);">
                                    <img src="data/avatar/system/2_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=3','url',false);">
                                    <img src="data/avatar/system/3_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=4','url',false);">
                                    <img src="data/avatar/system/4_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=5','url',false);">
                                    <img src="data/avatar/system/5_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=6','url',false);">
                                    <img src="data/avatar/system/6_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=7','url',false);">
                                    <img src="data/avatar/system/7_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=8','url',false);">
                                    <img src="data/avatar/system/8_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=9','url',false);">
                                    <img src="data/avatar/system/9_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=10','url',false);">
                                    <img src="data/avatar/system/10_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=11','url',false);">
                                    <img src="data/avatar/system/11_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=12','url',false);">
                                    <img src="data/avatar/system/12_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=13','url',false);">
                                    <img src="data/avatar/system/13_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=14','url',false);">
                                    <img src="data/avatar/system/14_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=15','url',false);">
                                    <img src="data/avatar/system/15_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=16','url',false);">
                                    <img src="data/avatar/system/16_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=17','url',false);">
                                    <img src="data/avatar/system/17_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=18','url',false);">
                                    <img src="data/avatar/system/18_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=19','url',false);">
                                    <img src="data/avatar/system/19_small.jpg" class="pic_small" original-title="">
                                </li>                                <li style="cursor:pointer;" title="就选这个" onclick="formSub('index.php?do=user&amp;view=setting&amp;op=picture&amp;show=choose&amp;ac=set_pic&amp;pic_id=20','url',false);">
                                    <img src="data/avatar/system/20_small.jpg" class="pic_small" original-title="">
                                </li>                            </ul>
                            <div class="clear">
                            </div>
                       
                            <h3 class=" mb_10 border_b_c ">头像预览</h3>
                                <ul class="clearfix">
                                	<li class="fl_l mr_10">
                                    <img src="http://localhost/weike/data/avatar/default/man_big.jpg" uid="11" class="pic_larger" original-title=""><p>150x150像素</p>
</li>
<li class="fl_l mr_10">
<img src="http://localhost/weike/data/avatar/default/man_middle.jpg" uid="11" class="pic_middle" original-title=""><p>100x100像素</p>
</li>
<li class="fl_l mr_10">
<img src="http://localhost/weike/data/avatar/default/man_small.jpg" uid="11" class="pic_small" original-title=""><p>50x50像素</p>
</li>
<li class="clear"></li>
                                </ul>
                            
                        </div>
                        <!--头像选择end-->
                         
                    </article>
                    <!--detail内容 end-->
                </div>
                <!--main content end -->
                <div class="clear">
                </div>
            </div>
        </div>
        </div></section>
</div>