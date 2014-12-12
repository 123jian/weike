
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

  <div class="show_panel container_24 po_re">
    <div class="prefix_3 grid_21">
     <div class="panel clearfix box">
      <!--main content-->
        <div class="">
          <!--header内容头部 start-->
            <header class="clearfix box_header">
               <div class="messages m_infor">
                                    <span class="icon16">info</span>
                                      开通店铺                                                          
                                    <a class="close" href="###">×</a>
                                </div>
             <div class="clear"></div>
         </header>
        <!--header内容头部 end-->
      
       <div class="prefix_1 suffix_1">
         <div class="clearfix box market font14"> 
                  <div class="suffix_1 clearfix  pb_20 pt_10">
                     <div class="shops">您还没有开通店铺！</div>
                     <div class="memb">
                     	<div class="hao">已有8个会员开通店铺</div>
<div class="air">
<div class="air">店铺作为展示个人与企业用户商品及资料的平台，扩展各界威客用户之间的互动与了解，提升商品的交易和任务的协调工作。</div>
    </div>
<div class="air">欢迎开通店铺，成为威客商城卖家！</div> 
<div class="grid_10 t_l mt_20 alpha omega">
<button class="grid_3 alpha omega" onclick="open_shop();" value="立即开通" type="submit">立即开通</button>

</div>
                     </div>
                      </div>
                   </div>
                 </div>
              <!--detail内容 end-->
            </div>
          <!--main content end-->
         </div>
       <div class="clear"></div>
     </div>
    </div>
   </section>