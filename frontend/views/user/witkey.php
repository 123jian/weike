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
                 <a href="index.php?do=user&amp;view=witkey&amp;op=pub" original-title="进入发布商品">
                   <div class="icon16 doc-new">icon</div><strong>发布商品</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&amp;view=witkey&amp;op=task" class="selected" original-title="进入参与的任务">
                   <div class="icon16 doc-lines-stright">icon</div><strong>参与的任务</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=witkey&amp;op=g_pub" original-title="进入出售中商品">
                   <div class="icon16 notepad">icon</div><strong>出售中商品</strong>
     </a>
             </li>
              <li>
                 <a href="index.php?do=user&amp;view=witkey&amp;op=shop" original-title="进入卖出的商品">
                   <div class="icon16 box">icon</div><strong>卖出的商品</strong>
     </a>
             </li>
        </ul>
       <ul class="nav_group clearfix">
             <li>
                 <a href="index.php?do=user&amp;view=witkey&amp;op=credit" original-title="进入能力等级">
                   <div class="icon16 cert">icon</div><strong>能力等级</strong>
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
                                <h2 class="grid_4 alpha omega box_title t_c">任务管理</h2>
                                <div class="grid_17 alpha omega">
                                    <nav class="box_nav">
                                        <ul><li class="backLava" style="position: absolute; display: block; margin: 0px; padding: 0px; left: 0px; top: 0px; width: 126px; height: 33px; overflow: hidden;"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></li>
                                                                                        <li class="selectedLava">
                                                <a href="index.php?do=user&amp;view=witkey&amp;op=task&amp;model_id=1#userCenter" original-title="我参加的单人悬赏">我参加的单人悬赏(0)</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=witkey&amp;op=task&amp;model_id=2#userCenter" original-title="我参加的多人悬赏">我参加的多人悬赏(0)</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=witkey&amp;op=task&amp;model_id=3#userCenter" original-title="我参加的计件悬赏">我参加的计件悬赏(0)</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=witkey&amp;op=task&amp;model_id=4#userCenter" original-title="我参加的普通招标">我参加的普通招标(0)</a>
                                            </li>
                                                                                        <li>
                                                <a href="index.php?do=user&amp;view=witkey&amp;op=task&amp;model_id=5#userCenter" original-title="我参加的订金招标">我参加的订金招标(0)</a>
                                            </li>
                                             
                                        </ul>
                                    </nav>
                                </div>
                                <div class="clear">
                                </div>
                            </header>
                            <!--header内容头部 end--><!--detail内容 start-->
                            <article class="box_detail">
                                                             <!--messages消息 start-->
                                <div class="messages m_infor clearfix">
                                    <span class="icon16 fl_l">info</span>
                                    <div class="grid_18">我参加的单人悬赏任务数 :0个。</div>
                                </div>
                                <!--messages消息 end-->
                                <div class="">
                                    <!--from表单 start-->
                                    <div class="clearfix box pad10">
                                        <form action="index.php?do=user&amp;view=witkey&amp;op=task&amp;model_id=1&amp;page_size=10&amp;task_status=&amp;work_status=&amp;page=1#userCenter" method="post" id="frm">
                                            <input type="hidden" name="page" value="1" original-title="">
                                            <div class="rowElem clearfix">
                                                <div class="mr_10 fl_l">
                                                    <input type="text" name="work_id" class="togg_u txt_input" value="请输入稿件编号" size="13" original-title="请输入稿件编号">
                                                </div>
                                                <div class="mr_10 fl_l">
                                                    <label class="t_l fl_l">
                                                        任务状态：                                                    </label>
                                                    <select class="fl_l" name="task_status" style="width:80px">
                                                        <option value="-1" selected="selected">全部</option>
                                                        <option value="0">未付款 </option>
                                                        <option value="1">待审核 </option>
                                                        <option value="2">投稿中 </option>
                                                        <option value="3">任务选稿 </option>
                                                        <option value="4">发起投票 </option>
                                                        <option value="5">公示中 </option>
                                                        <option value="6">交付中 </option>
                                                        <option value="7">冻结 </option>
                                                        <option value="8">结束 </option>
                                                        <option value="9">失败 </option>
                                                        <option value="10">审核失败 </option>
                                                        <option value="11">仲裁 </option>
                                                        <option value="13">交付冻结 </option>
                                                                                                            </select>
                                                </div>
                                                <div class=" fl_l">
                                                    <label class="t_l fl_l">
                                                        稿件状态：                                                    </label>
                                                    <select class="fl_l" name="work_status" style="width:80px">
                                                        <option value="" selected="selected">全部</option>
                                                        <option value="0">未审核 </option>
                                                        <option value="4">中标 </option>
                                                        <option value="5">入围 </option>
                                                        <option value="7">淘汰 </option>
                                                        <option value="8">不可选标 </option>
                                                                                                            </select>
                                                </div>
                                                <div class=" fl_l">
                                                    <select class="fl_l" name="ord">
                                                        <option value=" a.work_id desc ">稿件编号降序 </option>
                                                        <option value=" a.work_id asc ">稿件编号升序 </option>
                                                        <option value=" a.work_time desc ">提交时间降序 </option>
                                                        <option value=" a.work_time asc ">提交时间升序 </option>
                                                                                                            </select>
                                                </div>
                                                <div class="mr_20 fl_l">
                                                    <select class="fl_l" name="page_size">
                                                        <option value="10" selected="selected">每页10条</option>
                                                        <option value="20">每页20条</option>
                                                        <option value="30">每页30条</option>
                                                    </select>
                                                </div>
                                                <div class="fl_r">
                                                    <button class="block" type="submit" name="sbt_search" value="搜索"><span class="icon magnifier"></span>搜索</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--date_table数据表格 start-->
                                        <div class="data_list mt_10">
                                            <table cellpadding="0" cellspacing="0" class="data_table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" width="10%">
                                                           稿件编号                                                        </th>
                                                        <th scope="col" width="30%">
                                                            所属任务                                                        </th>
                                                        <th scope="col">
                                                            任务金额                                                        </th>
                                                        <th scope="col">
                                                            发布时间                                                        </th>
                                                        <th scope="col">
                                                            任务状态                                                        </th>
                                                        <th scope="col">
                                                            稿件状态                                                        </th>
                                                        <th scope="col" width="150">
                                                            操作                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <tr>
    <td colspan="8" class="t_c">
                                                            暂无记录                                                        </td>
                                                    </tr> 
                                                </tbody>
                                                <tfoot>
                                                    <tr> 
                                                        <td colspan="8">
                                                            共:0个                                                        </td>
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
                                    <!--from表单 end-->
                                </div>
                            </article>
                            <!--detail内容 end-->
                        </div>
                    </div>
                    <!--main content end -->
                    <div class="clear">
                    </div>
                </div>
            </div>
        </section>
</div>