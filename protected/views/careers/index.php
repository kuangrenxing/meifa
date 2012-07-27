

<div id="mainbox_bg" style="width:1000px; margin:0px auto;">


<table width="1000" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
  <tbody><tr>
    <td width="167" align="left" valign="top">
	
	
	

	
	<!--内页分类 开始-->
	<table width="160" border="0" cellspacing="0" cellpadding="0" id="box2">
  <tbody><tr>
    <td class="box2_t" align="left" valign="top">招贤纳士</td>
  </tr>
  <tr>
    <td class="box2_m" align="left" valign="top">

<ul id="sidebar">
                           



      
     <li>
	  <a href="<?php echo Yii::app()->createUrl("careers");?>">招聘信息</a>

	</li>
     

	
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
    <td class="box3_t" align="left" valign="top"><div class="location">首页&nbsp;&gt;&gt;&nbsp;招贤纳士</div><b>招贤纳士</b></td>
  </tr>
  <tr>
    <td class="box3_t2"></td>
  </tr>
  <tr>
    <td class="box3_m0" align="left" valign="top">
    <?php foreach($dataProvider->data as $v):?>
		<div class="careers-content">
		    <h3><?php echo $v['position']?></h3>
		
		<p class="careers-pos">岗位职责：</p>
			<div class="careers-detail">
				<?php echo $v['job'];?>
			</div>
			
		<p class="careers-pos">工作要求：</p>
			<div class="careers-detail">
				<?php echo $v['requirement'];?>
			</div>
			
		<p class="careers-pos">详情介绍：</p>
			<div class="careers-detail">
				<?php echo $v['detail'];?>
			</div>
		</div>
	<?php endforeach;?>


</td>
  </tr>
</tbody></table>
	<!--内页详细 结束-->
	
	
	
	
	</td>
  </tr>
</tbody></table>