
<div id="mainbox_bg" style="width:1000px; margin:0px auto;">


<table width="1000" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
  <tbody><tr>
    <td width="167" align="left" valign="top">
	
	
	

	
	<!--内页分类 开始-->
	<table width="160" border="0" cellspacing="0" cellpadding="0" id="box2">
  <tbody><tr>
    <td class="box2_t" align="left" valign="top">	
	
	美发产品

</td>
  </tr>
  <tr>
    <td class="box2_m" align="left" valign="top">

<ul id="sidebar">
<li class="small"><a href="<?php echo Yii::app()->createUrl("hairproducts/index");?>">全部</a></li>
<?php foreach(($category) as $v):	?>
<li class="small"><a href="<?php echo Yii::app()->createUrl("hairproducts/index",array("category"=>$v));?>"><?php echo $v;?></a></li>
<?php endforeach;?>

</ul>
</td>
  </tr>
</tbody></table>
   <!--内页分类  结束-->	
		
	
	
	</td>
    <td width="30" align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">
	
	
	


	
	
	<!--内页详细 开始-->
	<table width="785" border="0" cellspacing="0" cellpadding="0" id="box3">
  <tbody><tr>
    <td class="box3_t" align="left" valign="top"><div class="location">首页&nbsp;&gt;&gt;&nbsp;
	
美发产品
	
	</div><b>
		美发产品
	
	
	
	</b></td>
  </tr>
  <tr>
    <td class="box3_t2"></td>
  </tr>
  <tr>
    <td class="box3_m00" align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
    	<tbody>
    	<?php 
    	

    	foreach($model as $i=>$v):?>
			<?php if($i%4==0):?>
				<tr>
			<?php endif;?>
			<td align="left" valign="top">					
				<div class="product_product_img">
				<a href="<?php echo Yii::app()->createUrl('hairproducts/view',array('id'=>$v['id']));?>">
					<img src="<?php echo Yii::app()->baseUrl.DIRECTORY_SEPARATOR.Yii::app()->params['uploadUrl'].DIRECTORY_SEPARATOR.$model['0']->uploadFields['picture'].DIRECTORY_SEPARATOR.$v['picture'];?>" width="160" height="132" border="0">
				</a>	
					<table height="132" width="160" align="left" border="0" cellspacing="0" cellpadding="0" class="product_frame">
				         <tbody><tr>
				            <td valign="top" align="left">		
				 				<a href="<?php echo Yii::app()->createUrl('hairproducts/view',array('id'=>$v['id']));?>"><img src="./images/bg2.gif" width="164" height="136"></a>			
							 </td>
				         	</tr>
				    	</tbody>
				    </table> 
				</div>
				<div id="product_detail">
				<p class="product_list_title"><a href="http://t.mobanku.com/00846/product_view.asp?id=305&bid=25&sid=175"><?php echo $v['name'];?></a></p>
				<p class="product_List_marketprice">市场价：<span><?php echo $v['price'];?>元</span></p>
				
				<p class="product_list_introduce"><?php echo substr(strip_tags($v['detail']), 0,9);?>……</p>

				</div>
			</td>
			<?php if(($i+1)%4==0):?>
				</tr>
				<tr><td height="1" colspan="2"></td></tr>
			<?php endif;?>
    	<?php endforeach;?>
    	<tr>
                        </tr></tbody></table>
<div class="digg">
	<div id="pager">
	<?php
	$this->widget('CLinkPager',array(
		'header'=>'',
		'firstPageLabel' => '首页',
		'lastPageLabel' => '末页',
		'prevPageLabel' => '上一页',
		'nextPageLabel' => '下一页',
		'pages' => $pages,
		'maxButtonCount'=>10
		)
	);
	?>
	</div>

</div></td>
  </tr>
</tbody></table>
	<!--内页详细 结束-->
	
	
	
	
	</td>
  </tr>
</tbody></table>

