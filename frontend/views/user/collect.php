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
<div class="container_24">
    <section class="clearfix section">
            <!--用户中心样式-->
<div class="second_menu container_24 po_ab clearfix">
    <div class="suffix_21">
        <nav class="minor_nav box clearfix">
           <!--子导航开始-->
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&amp;view=collect&amp;op=task" class="selected" original-title="进入收藏的任务">
                   <div class="icon16 document">icon</div><strong>收藏的任务</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=collect&amp;op=work" original-title="进入收藏的稿件">
                   <div class="icon16 doc-empty">icon</div><strong>收藏的稿件</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=collect&amp;op=service" original-title="进入收藏的商品">
                   <div class="icon16 layers-1">icon</div><strong>收藏的商品</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=collect&amp;op=shop" original-title="进入收藏的店铺">
                   <div class="icon16 shop_cart">icon</div><strong>收藏的店铺</strong>
     </a>
             </li>
        </ul>
<!--子导航结束-->
        </nav>
    </div>
</div>
            <div class="show_panel container_24 po_re">
                <div class="prefix_3 grid_21">
                    <div class="panel clearfix box">
                        <!--main content-->
                        <div class="">
                            <!--header内容头部 start-->
                            <header class="clearfix box_header">
                                <h2 class="grid_4 alpha box_title t_c">收藏的任务</h2>
                   
                            </header>
                            <!--header内容头部 end--><!--detail内容 start-->
                            <article class="box_detail">
                               
                                <div class="">
                                    <!--from表单 start-->
                                    <div class="clearfix box pad10">
                                        <form action="index.php?do=user&amp;view=collect&amp;op=task&amp;obj_type=&amp;ord=&amp;page=1&amp;page_size=10#userCenter" method="post" id="frm">
                                            <input type="hidden" name="page" value="1" original-title="">
                                            <div class="rowElem clearfix">
                                                <div class="mr_10 fl_l">
                                                    <input type="text" name="f_id" class="togg_u txt_input" value="请输入收藏编号" size="5" style="width:140px;" original-title="请输入收藏编号">
                                                </div>
                                                <div class="mr_10 fl_l">
                                                    <input type="text" name="obj_name" class="togg_u txt_input" value="请输入收藏名称" style="width:150px;" original-title="请输入收藏名称">
                                                </div>
                                                <div class="fl_l">
                                                    <select class="fl_l" name="ord">
                                                        <option value="f_id desc ">收藏编号降序 </option>
                                                        <option value="f_id asc ">收藏编号升序 </option>
                                                        <option value="on_date desc">收藏时间降序 </option>
                                                        <option value="on_date asc ">收藏时间升序 </option>
                                                                                                            </select>
                                                </div>
                                                <div class="mr_10 fl_l">
                                                    <select class="fl_l" name="page_size">
                                                        <option value="10" selected="selected">每页10条</option>
                                                        <option value="20">每页20条</option>
                                                        <option value="30">每页30条</option>
                                                    </select>
                                                </div>
                                                <div class="fl_r">
                                                    <button type="submit" class="block" name="sbt_search" value="搜索" onclick="check('frm');"><span class="icon magnifier"></span>搜索</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--from表单 end--><!--date_table数据表格 start-->
                                        <div class="data_list mt_10">
                                            <table cellpadding="0" cellspacing="0" class="data_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            收藏编号                                                        </th>
                                                        <th scope="col">
                                                            收藏名称                                                        </th>
                                                        <th scope="col">
                                                            收藏时间                                                        </th>
 <th scope="col">
                                                  操作                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                                                          <tr class="">
    	 <td colspan="4" class="t_c">
                                                          暂无记录                                                      </td>
                                            </tr>
                                                                                        </tbody>
                                            <tfoot>
                                                <tr>
                                                	<td>
                                                		</td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                       共:0个                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!--data_table数据表格 end-->
                                    <div class="page clearfix">
                                        <p>
                                                                                    </p>
                                    </div>
                                </div>
                                </div>
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