<div id="mainbox_bg" style="width:1000px; margin:0px auto;">


<table width="1000" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
  <tbody><tr>
    <td width="167" align="left" valign="top">
	
	
	

	
	<!--内页分类 开始-->
	<table width="160" border="0" cellspacing="0" cellpadding="0" id="box2">
  <tbody><tr>
    <td class="box2_t" align="left" valign="top">其它信息</td>
  </tr>
  <tr>
    <td class="box2_m" align="left" valign="top">

<ul id="sidebar">
	<li class="small"><a target="_blank" href="<?php echo Yii::app()->createUrl("hairstylist");?>">发型艺术家</a></li>
	<li class="small"><a target="_blank" href="<?php echo Yii::app()->createUrl("hairstyleshow");?>">发型展示</a></li>
	<li class="small"><a target="_blank" href="<?php echo Yii::app()->createUrl("knowledge");?>">美发知识</a></li>
	
	
</ul></td>
  </tr>
</tbody></table>
   <!--内页分类  结束-->	
	
	</td>
    <td width="30" align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">
	
	
	<!--内页详细 开始-->
	<table width="785" border="0" cellspacing="0" cellpadding="0" id="box3">
  <tbody><tr>
    <td class="box3_t" align="left" valign="top"><div class="location"><a href="<?php echo Yii::app()->baseUrl;?>/">首页</a>&nbsp;&gt;&gt;&nbsp;活动信息</div><b>活动信息</b></td>
  </tr>
  <tr>
    <td class="box3_t2"></td>
  </tr>
  <tr>
    <td class="box3_m0" align="left" valign="top">
    <ul class="know-list">
    <p><?php echo $model->title;?></p>
    <p><?php echo date('Y-m-d H:i',$model->create_time);?></p>
    <div><?php echo $model->content;?></div>
    	
    </ul>

    
    </td>
  </tr>
</tbody></table>
	<!--内页详细 结束-->
	
	
	
	
	</td>
  </tr>
</tbody></table>

