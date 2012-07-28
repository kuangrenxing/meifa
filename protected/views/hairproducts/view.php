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
<?php foreach ($category as $v):?>

<li class="small"><a href="<?php echo Yii::app()->createUrl("hairproducts/index",array('category'=>$v));?>"><?php echo $v;?></a></li>
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
    <td class="box3_t" align="left" valign="top"><div class="location"><a href="<?php echo Yii::app()->baseUrl;?>/">首页</a>&nbsp;&gt;&gt;&nbsp;
	
	美发产品
	
	</div>
      <b><?php echo $model->name;?></b></td>
  </tr>
  <tr>
    <td class="box3_t2"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table cellspacing="0" cellpadding="0" width="96%" border="0" style="padding-top:20px;">
                                <tbody>
                                <tr>
                                <td valign="top">
								

      <table width="100%" border="0" align="center" cellpadding="8" cellspacing="2">
        <tbody><tr> 
          <td valign="top" width="500"><table width="500" height="500" border="0" cellpadding="1" cellspacing="1">
<tbody><tr><td align="center" valign="bottom" bgcolor="#FFFFFF"><img src="<?php echo Yii::app()->baseUrl.DIRECTORY_SEPARATOR.Yii::app()->params['uploadUrl'].DIRECTORY_SEPARATOR.$model->uploadFields['picture'].DIRECTORY_SEPARATOR.$model['picture'];?>" width="500" height="500" border="0"></td>
  </tr>

</tbody></table>

            
          </td>
          <td valign="top" align="left">
		  
		  
		  
		  			
  <table width="94%" border="0" cellspacing="2" cellpadding="4" style="margin-left:15px;">
              
			  <tbody><tr>
                <td class="product_list_title0"><b><?php echo $model['name']?></b></td>
              </tr>
			  
            </tbody></table>
			
			   
		   <table width="94%" border="0" cellspacing="2" cellpadding="4" style="margin-left:15px;margin-top:7px;">
              
			  <tbody><tr>
                <td>
			<p class="product_List_marketprice">价格：<span>￥<?php echo $model['price'];?>元</span></p>
           
              </tr>
			  
            </tbody></table>
		   
		    
      
            <table width="94%" border="0" cellspacing="2" cellpadding="4" style="margin-left:15px;margin-top:7px;">
              <tbody><tr>
                <td class="product_list_title0">产品详细信息:</td>
              </tr>
			  <tr>
                <td class="product_list_detail"><?php echo $model['detail'];?></td>
              </tr>
            </tbody></table>
         
            
			
			
			
			
			</td>
        </tr>
      </tbody></table>

      
      
     
</td></tr>
</tbody></table></td>
  </tr>
</tbody></table>
	<!--内页详细 结束-->
	
	
	
	
	</td>
  </tr>
</tbody></table>