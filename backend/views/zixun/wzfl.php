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
<style type="text/css">
.jia {background: url(tpl/img/plus.gif)}
.jian {background: url(tpl/img/minus.gif) }
</style>
<div class="page_title">
    	<h1>�������</h1>
        <div class="tool">
            <a href="index.php?do=article&view=cat_list&type=art" class="here">�������</a>
          <a href="index.php?do=article&view=cat_edit&type=art"  >�������</a>           
</div>
</div>

<div class="box tip clearfix p_relative" id="man_tips">
   <div class="control"><a href="javascript:void(0);" title=�ر� onclick="$('#man_tips').fadeOut();"><b>&times;</b></a></div>
   <div class="title"><h2>С��ʾ</h2></div>
   <div class="detail pad10">
      <ul>
         <li>*��վĬ��ģ���������¶���������Ч</li>
      </ul>
   </div>
</div>


<div class="box search p_relative">
    	<div class="title"><h2>����</h2></div>
        <div class="detail" id="detail">
           
    <form action="" method="get">
            	<input type="hidden" name="do" value="article">
<input type="hidden" name="view" value="cat_list">
<input type="hidden" name="type" value="art">
<input type="hidden" name="page" value="">
 
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>��������</th>
                            <td>
                            	<select   name="w[art_cat_pid]" id="catid">
                            	<option value=1>�Ϳ���Ѷ</option><option value=358>&nbsp;&nbsp;&nbsp; |-�����б�</option><option value=203>&nbsp;&nbsp;&nbsp; |-��ȫ����</option><option value=202>&nbsp;&nbsp;&nbsp; |-��������</option><option value=17>&nbsp;&nbsp;&nbsp; |-��վ����</option><option value=7>&nbsp;&nbsp;&nbsp; |-ý�屨��</option><option value=5>&nbsp;&nbsp;&nbsp; |-��ҵ��̬</option><option value=4>&nbsp;&nbsp;&nbsp; |-���߷���</option><option value=2>&nbsp;&nbsp;&nbsp; |-��ϵ����</option></select>
(������)
                            </td>
                            <th>��������</th>
                            <td><input type="text" value="" name="w[cat_name]" class="txt"/>*֧��ģ����ѯ</td>
                             <td></td> 
</tr>
                        <tr >
                            
<th>�������</th>
<td>

<select name="ord[]">
                                <option value="art_cat_id"  selected="selected">Ĭ������</option>
                                <option value="on_time" >���ʱ��</option>
                                </select>
                                <select name="ord[]">
                                <option selected="selected"  value="desc">�ݼ�</option>
                                <option  value="asc">����</option>
                                </select>
<button class="pill" type="submit" value=���� name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span>����</button>
</td>
                             
                            <td colspan="3"> 
                              	&nbsp;
</td>
  
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--��������-->
<div class="box list">
    	<div class="title"><h2>�����б�</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
              <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                 <!--   <th width="8%">ID</th>-->
                    <th width="7%">��ʾ˳��</th>
                    <th width="30%">��������</th>                    
                    <th width="17%"> �޸�ʱ��</th>
                   <th width="13%">����</th>
                </tr>
                
                 <tbody id="indus_item_l_1" style="display:;">
                  <tr class="item" align="left">
                  <!--	<td>1</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_1" value="10" onblur="edit_listorder(1,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_1('show');
$(this).attr('class','jian');
}else{showids_1('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_1"
 style="font-weight:900;font-size:16px;">
                            <input type="text" class="txt" value="�Ϳ���Ѷ" 
readonly="readonly" >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(1,'')">��������</a>					
</td>                                
                    <td>2011-12-27 17:39:05</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=1&art_cat_pid=0&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_2" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>2</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_2" value="2" onblur="edit_listorder(2,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_2"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="��ϵ����" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-16 17:08:59</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=2&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=2&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_4" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>4</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_4" value="1" onblur="edit_listorder(4,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_4"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="���߷���" 
readonly="readonly" >
</span>
</td>                                
                    <td>2010-05-17 17:44:57</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=4&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=4&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_5" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>5</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_5" value="1" onblur="edit_listorder(5,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_5"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="��ҵ��̬" 
readonly="readonly" >
</span>
</td>                                
                    <td>2010-05-17 21:06:46</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=5&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=5&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_7" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>7</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_7" value="1" onblur="edit_listorder(7,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_7"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="ý�屨��" 
readonly="readonly" >
</span>
</td>                                
                    <td>2010-05-17 21:07:27</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=7&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=7&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_17" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>17</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_17" value="0" onblur="edit_listorder(17,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_17('show');
$(this).attr('class','jian');
}else{showids_17('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_17"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="��վ����" 
readonly="readonly" >
</span>
</td>                                
                    <td>2010-07-05 17:53:25</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=17&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=17&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_360" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>360</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_360" value="1" onblur="edit_listorder(360,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_360"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="�����" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-09-07 10:38:36</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=360&art_cat_pid=17&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=360&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_202" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>202</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_202" value="1" onblur="edit_listorder(202,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_202"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="��������" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-27 10:20:44</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=202&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=202&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_203" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>203</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_203" value="0" onblur="edit_listorder(203,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_203('show');
$(this).attr('class','jian');
}else{showids_203('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_203"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="��ȫ����" 
readonly="readonly" >
</span>
</td>                                
                    <td>2010-12-18 15:54:41</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=203&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=203&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_359" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>359</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_359" value="1" onblur="edit_listorder(359,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_359('show');
$(this).attr('class','jian');
}else{showids_359('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_359"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="111111111" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-09-06 17:51:52</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=359&art_cat_pid=203&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=359&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_365" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>365</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_365" value="1" onblur="edit_listorder(365,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |---<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_365"
 style="font-weight:0;font-size:10px;">
                            <input type="text" class="txt" value="rrrrrr" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-09-07 11:35:58</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=365&art_cat_pid=359&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=365&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_361" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>361</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_361" value="1" onblur="edit_listorder(361,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_361"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="ffffff" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-09-07 10:42:10</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=361&art_cat_pid=203&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=361&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_358" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>358</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_358" value="1" onblur="edit_listorder(358,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp; |-<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_358('show');
$(this).attr('class','jian');
}else{showids_358('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_358"
 style="font-weight:600;font-size:14px;">
                            <input type="text" class="txt" value="�����б�" 
readonly="readonly" >
</span>
</td>                                
                    <td>2011-12-19 11:08:10</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=358&art_cat_pid=1&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=358&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                   <tbody id="indus_item_l_363" style="display:none;">
                  <tr class="item" align="left">
                  <!--	<td>363</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_363" value="1" onblur="edit_listorder(363,this.value)"></td>
                    <td align="left">
                    	&nbsp;&nbsp;&nbsp;&nbsp; |--<span class="jian" 
>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_363"
 style="font-weight:300;font-size:12px;">
                            <input type="text" class="txt" value="2222" 
readonly="readonly" >
</span>
</td>                                
                    <td>2012-09-07 11:05:52</td>
                    <td>
<a href="index.php?do=article&view=cat_edit&art_cat_id=363&art_cat_pid=358&type=art" class="button dbl_target"><span class="pen icon"></span>�༭</a>
<a href="index.php?do=article&view=cat_list&type=art&w[art_cat_pid]=&w[cat_name]=
		&=&art_cat_id=363&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>ɾ��</a>

</td>
                  </tr>
  </tbody>
                                 <tr>
               	<td>&nbsp;</td>
                    <td colspan="6">
                   
                    
                    <div class="clearfix">
                  		<div class="clearfix">	
                      <!--  <a href="index.php?do=task&view=union_industry"   class="button pill negative"><span class="icon cog">&nbsp;</span></a>-->
<button  name="sbt_action" type="submit" value=�ύ class="positive primary pill button" /><span class="check icon"></span>�ύ</button>
                    </div>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>

   	</form>
        </div>       
    </div>
<script type="text/javascript">

    	function edit_listorder(iid,v){
    		$.get('index.php?do=article&view=cat_list&ac=editlistorder',{iid:iid,val:v});
    	}
    	
    	var newindus_c = 0;
    	function addchild(pid,ext){
    		newindus_c++;
    		if(ext=='')
    		{ext = '|';}
    		if(ext!=' ')
    		{ext = '&nbsp;&nbsp;&nbsp;'+ext+'---';}
    		var mod = '<tr class="item" id="newindus_c_'+newindus_c+'">';
    		  	mod+='<td class="td28">'+'<input type=text size=3 class="txt" name="add_cat_name_listarr['+pid+']['+newindus_c+']" size=3>';+'</td>';
    		  	mod+='<td>'+ext;
    			mod+='<input type=text class="txt" name="add_cat_name_arr['+pid+']['+newindus_c+']">';
    			mod+='</td>';
    		   
    	 
    		    mod+='<td>&nbsp;</td>';
    			mod+='<td>';
    			mod+='<a href="javascript:;" onclick="$(\'#newindus_c_'+newindus_c+'\').remove()">';
    			mod+='ɾ��';
    			mod+='</a>';
    			mod+='</td>';
    		  	mod+='</tr>	';
    			
    			$('#indus_item_l_'+pid).append(mod); 
    		
    	}
    	
             	function showids_1(op){
    		if(op=='show'){
    			    			$('#indus_item_l_203').show();
    			    			$('#indus_item_l_17').show();
    			    			$('#indus_item_l_358').show();
    			    			$('#indus_item_l_4').show();
    			    			$('#indus_item_l_202').show();
    			    			$('#indus_item_l_7').show();
    			    			$('#indus_item_l_5').show();
    			    			$('#indus_item_l_2').show();
    			    		}
    		else{
    			    			$('#indus_item_l_203').hide();
    			    			$('#indus_item_l_17').hide();
    			    			$('#indus_item_l_358').hide();
    			    			$('#indus_item_l_4').hide();
    			    			$('#indus_item_l_202').hide();
    			    			$('#indus_item_l_7').hide();
    			    			$('#indus_item_l_5').hide();
    			    			$('#indus_item_l_2').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_291(op){
    		if(op=='show'){
    			    			$('#indus_item_l_325').show();
    			    			$('#indus_item_l_323').show();
    			    			$('#indus_item_l_324').show();
    			    		}
    		else{
    			    			$('#indus_item_l_325').hide();
    			    			$('#indus_item_l_323').hide();
    			    			$('#indus_item_l_324').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_100(op){
    		if(op=='show'){
    			    			$('#indus_item_l_291').show();
    			    			$('#indus_item_l_294').show();
    			    			$('#indus_item_l_290').show();
    			    			$('#indus_item_l_293').show();
    			    		}
    		else{
    			    			$('#indus_item_l_291').hide();
    			    			$('#indus_item_l_294').hide();
    			    			$('#indus_item_l_290').hide();
    			    			$('#indus_item_l_293').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_203(op){
    		if(op=='show'){
    			    			$('#indus_item_l_361').show();
    			    			$('#indus_item_l_359').show();
    			    		}
    		else{
    			    			$('#indus_item_l_361').hide();
    			    			$('#indus_item_l_359').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_298(op){
    		if(op=='show'){
    			    			$('#indus_item_l_362').show();
    			    		}
    		else{
    			    			$('#indus_item_l_362').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_358(op){
    		if(op=='show'){
    			    			$('#indus_item_l_363').show();
    			    		}
    		else{
    			    			$('#indus_item_l_363').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_294(op){
    		if(op=='show'){
    			    			$('#indus_item_l_346').show();
    			    			$('#indus_item_l_297').show();
    			    			$('#indus_item_l_311').show();
    			    			$('#indus_item_l_312').show();
    			    			$('#indus_item_l_296').show();
    			    			$('#indus_item_l_298').show();
    			    			$('#indus_item_l_347').show();
    			    			$('#indus_item_l_310').show();
    			    			$('#indus_item_l_327').show();
    			    			$('#indus_item_l_345').show();
    			    		}
    		else{
    			    			$('#indus_item_l_346').hide();
    			    			$('#indus_item_l_297').hide();
    			    			$('#indus_item_l_311').hide();
    			    			$('#indus_item_l_312').hide();
    			    			$('#indus_item_l_296').hide();
    			    			$('#indus_item_l_298').hide();
    			    			$('#indus_item_l_347').hide();
    			    			$('#indus_item_l_310').hide();
    			    			$('#indus_item_l_327').hide();
    			    			$('#indus_item_l_345').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_292(op){
    		if(op=='show'){
    			    			$('#indus_item_l_315').show();
    			    			$('#indus_item_l_318').show();
    			    			$('#indus_item_l_317').show();
    			    			$('#indus_item_l_316').show();
    			    		}
    		else{
    			    			$('#indus_item_l_315').hide();
    			    			$('#indus_item_l_318').hide();
    			    			$('#indus_item_l_317').hide();
    			    			$('#indus_item_l_316').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_17(op){
    		if(op=='show'){
    			    			$('#indus_item_l_360').show();
    			    		}
    		else{
    			    			$('#indus_item_l_360').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_271(op){
    		if(op=='show'){
    			    			$('#indus_item_l_322').show();
    			    			$('#indus_item_l_321').show();
    			    			$('#indus_item_l_320').show();
    			    		}
    		else{
    			    			$('#indus_item_l_322').hide();
    			    			$('#indus_item_l_321').hide();
    			    			$('#indus_item_l_320').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_293(op){
    		if(op=='show'){
    			    			$('#indus_item_l_319').show();
    			    			$('#indus_item_l_326').show();
    			    		}
    		else{
    			    			$('#indus_item_l_319').hide();
    			    			$('#indus_item_l_326').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_345(op){
    		if(op=='show'){
    			    			$('#indus_item_l_364').show();
    			    		}
    		else{
    			    			$('#indus_item_l_364').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_290(op){
    		if(op=='show'){
    			    			$('#indus_item_l_329').show();
    			    			$('#indus_item_l_328').show();
    			    			$('#indus_item_l_300').show();
    			    			$('#indus_item_l_301').show();
    			    			$('#indus_item_l_302').show();
    			    			$('#indus_item_l_303').show();
    			    			$('#indus_item_l_304').show();
    			    			$('#indus_item_l_305').show();
    			    			$('#indus_item_l_306').show();
    			    			$('#indus_item_l_307').show();
    			    			$('#indus_item_l_308').show();
    			    			$('#indus_item_l_309').show();
    			    		}
    		else{
    			    			$('#indus_item_l_329').hide();
    			    			$('#indus_item_l_328').hide();
    			    			$('#indus_item_l_300').hide();
    			    			$('#indus_item_l_301').hide();
    			    			$('#indus_item_l_302').hide();
    			    			$('#indus_item_l_303').hide();
    			    			$('#indus_item_l_304').hide();
    			    			$('#indus_item_l_305').hide();
    			    			$('#indus_item_l_306').hide();
    			    			$('#indus_item_l_307').hide();
    			    			$('#indus_item_l_308').hide();
    			    			$('#indus_item_l_309').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_359(op){
    		if(op=='show'){
    			    			$('#indus_item_l_365').show();
    			    		}
    		else{
    			    			$('#indus_item_l_365').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_0(op){
    		if(op=='show'){
    			    			$('#indus_item_l_100').show();
    			    			$('#indus_item_l_1').show();
    			    		}
    		else{
    			    			$('#indus_item_l_100').hide();
    			    			$('#indus_item_l_1').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_289(op){
    		if(op=='show'){
    			    			$('#indus_item_l_295').show();
    			    		}
    		else{
    			    			$('#indus_item_l_295').hide();
    			    		}
    		
    		    		
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
var c = "��ȷ��ɾ��������";
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
var c = "ȷ�����ͨ����";
} else {
var c = "ȷ�����ʧ�ܣ�";
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
var c = "ȷ�϶��᣿";
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
var c = "ȷ���Ƽ���";
} else {
var c = "ȷ��ȡ���Ƽ���";
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
var c = "��ȷ��ɾ��������";
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
d.confirm("ȷ��" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("��û��ѡ���κβ�����");
}
return false;
}
</script>
</body>
</html>
