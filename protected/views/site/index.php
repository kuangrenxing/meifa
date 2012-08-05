<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.js', CClientScript::POS_HEAD); ?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.easing.1.3.js', CClientScript::POS_HEAD); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.nivo.slider.pack.js', CClientScript::POS_HEAD); ?>



<?php //Yii::app()->clientScript->registerCSSFile(Yii::app()->request->baseUrl.'/css/nivo-slider/nivo-slider.css', CClientScript::POS_HEAD); ?>
<?php //Yii::app()->clientScript->registerCSSFile(Yii::app()->request->baseUrl.'/css/nivo-slider/themes/default/default.css', CClientScript::POS_HEAD); ?>
<?php //Yii::app()->clientScript->registerCSSFile(Yii::app()->request->baseUrl.'/css/nivo-slider/style.css', CClientScript::POS_HEAD); ?>

<?php //Yii::app()->clientScript->registerCSSFile(Yii::app()->request->baseUrl.'/css/nivo-slider/test.css', CClientScript::POS_HEAD); ?>

<!--adpic   begin-->
<link href="<?php echo Yii::app()->request->baseUrl?>/css/nivo-slider/nivo-slider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl?>/css/nivo-slider/themes/default/default.css" rel="stylesheet" type="text/css" />

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">

  <tbody><tr>
    <td align="center" valign="top">

<table width="1000"  border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody>
  	<tr>
	    <td>
        <div class="test1"></div>
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo Yii::app()->baseUrl;?>/images/indexslider1.jpg" data-thumb="<?php echo Yii::app()->baseUrl;?>/images/indexslider1.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="<?php echo Yii::app()->baseUrl;?>/images/indexslider2.jpg" data-thumb="<?php echo Yii::app()->baseUrl;?>/images/indexslider2.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="<?php echo Yii::app()->baseUrl;?>/images/indexslider3.jpg" data-thumb="<?php echo Yii::app()->baseUrl;?>/images/indexslider3.jpg" alt=""  />
                <img src="<?php echo Yii::app()->baseUrl;?>/images/indexslider4.jpg" data-thumb="<?php echo Yii::app()->baseUrl;?>/images/indexslider4.jpg" alt=""   title="#htmlcaption" />
                <img src="<?php echo Yii::app()->baseUrl;?>/images/indexslider5.jpg" data-thumb="<?php echo Yii::app()->baseUrl;?>/images/indexslider5.jpg" alt=""   title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
    </div>
	    
	    </td>
  	</tr>
   </tbody>
</table>
<style>

</style>


</td>

  </tr>

</tbody></table>

<!--adpic   end-->



<div id="mainbox_bg" style="width:1000px; margin:0px auto;">



<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="707" align="left" valign="top">
	<table width="700" border="0" cellspacing="0" cellpadding="0" style="margin-left:7px; margin-top:14px;">
  <tbody><tr>

    <td align="left" valign="top">
	

	

	<!--美丽极简? begin-->

	<table width="228" border="0" cellspacing="0" cellpadding="0" id="box1">

  <tbody><tr>

    <td align="left" valign="top" class="box1_t"><a target="_blank" href="<?php echo Yii::app()->createUrl('about')?>"><?php echo Yii::app()->params['companyname'];?></a></td>

  </tr>

  <tr>

    <td align="left" valign="top" class="box1_m">
    <?php echo $about->preface;?>
    </td>

  </tr>

</tbody></table>

<!--美丽极简? end-->









	</td>

    <td width="10"></td>

    <td align="left" valign="top">

	

		<!--艺术? begin-->

	<table width="228" border="0" cellspacing="0" cellpadding="0" id="box1">

  <tbody><tr>

    <td align="left" valign="top" class="box1_t"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairstylist');?>">发行艺术</a></td>

  </tr>

  <tr>

    <td align="left" valign="top" class="box1_m1"><table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tbody>
  <?php foreach ($hairstylist as $i=>$v):?>
  <?php if($i>1) break;?>
  <tr>
    <td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:5px;">
	        <tbody>
	        <tr>
	          <td width="1%" align="left" valign="top">
	          <a href="<?php echo Yii::app()->createUrl('hairstylist/view',array('id'=>$v['id']));?>"><img src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadUrl'].'/'.$v->uploadFields['avatar'].'/'.$v['avatar'];?>" width="81" height="109" border="0"></a></td>
	          <td width="99%" align="left" valign="top">
				<div style="margin-left:6px;"><a href="<?php echo Yii::app()->createUrl('hairstylist/view',array('id'=>$v['id']));?>"><b><?php echo $v['name'];?></b></a>
		
				<p><?php echo $v['category'];?></p>
				<p style="padding-top:15px;margin-bottom:5px;width:123px;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis;overflow: hidden;">座右铭：<br><?php echo $v['motto'];?></p>
		
				</div>		  
			 </td>
	
	        </tr>
	
	      </tbody>
	    </table>
    </td>
   </tr>
   <?php endforeach;?>

</tbody></table>

</td>

  </tr>

</tbody></table>

<!--艺术?end-->

	

	</td>

    <td width="10"></td>
    <td align="left" valign="top">
	

	<!--金牌项目  begin-->

	<table width="228" border="0" cellspacing="0" cellpadding="0" id="box1">

  <tbody>
  <tr>
    <td align="left" valign="top" class="box1_t"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairstyleshow');?>">金牌项目</a></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="box1_m0"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody>
	<?php
	foreach($hairstyleshow as $i=>$v)
	{
		$showCategory[]=$v['category'];
	}
	$showCategory = array_unique($showCategory);
	
	foreach ($showCategory as $i=>$v):
	if($i>7) break;
	?>
	<tr><td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:6px 0px;">
	        <tbody><tr>
	          <td width="1%" align="left" valign="top">
				<a target="_blank" href="<?php echo Yii::app()->createUrl('hairstyleshow/index',array('category'=>$v));?>"><?php echo $v;?></a></td>
				</tr>
	      	</tbody>
	    </table>
    </td></tr>
    <?php endforeach;?>


</tbody></table>

</td>

  </tr>

</tbody></table>

<!--金牌项目 end-->

		

	</td>

  </tr>

</tbody></table>



	

	

	<!--会员风采  begin-->

<table width="700" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-left:7px;margin-top:18px;">
	<tbody>
	<tr>
    	<td align="left" valign="top" class="box0_t"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairstylist');?>">名师风采</a></td>
  	</tr>
  	<tr>
    	<td align="left" valign="top" class="box0_m"><table width="100%" border="0" cellspacing="2" cellpadding="2">
		<tbody>
		<tr>
		<?php
		foreach($hairstylist as $i=>$v): 
		if($i>1):
			
		?>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
			        <tbody>
			        <tr>
			          <td align="center">
					  <table width="155" height="128" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC">
						<tbody>
							<tr>
			                	<td bgcolor="#FFFFFF"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairstylist/view',array('id'=>$v['id']));?>"><img src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadUrl'].'/'.$v->uploadFields['avatar'].'/'.$v['avatar'];?>" width="155" height="128" border="0"></a></td>
							</tr>
			            </tbody>
			           </table>
			          </td>
			        </tr>
			        <tr>
			          <td align="center"><a target="_blank" style="font_size:12px;" href="<?php echo Yii::app()->createUrl('hairstylist/view',array('id'=>$v['id']));?>"><?php echo $v['name'];?></a></td>
					</tr>
			      </tbody>
			    </table>
			</td> 
    	<?php endif;endforeach;?>
      

    


    </tr>

</tbody></table>

</td>

  </tr>

</tbody></table>

<!--会员风采 end-->





	<!--发型欣赏  begin-->

<table width="700" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-left:7px;margin-top:18px;">
  <tbody>
	  <tr>
	    <td align="left" valign="top" class="box0_t"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairstyleshow')?>">发型欣赏</a></td>
	  </tr>
  <tr>
    <td align="left" valign="top" class="box0_m"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
  <tr>
  <?php 
  foreach ($hairstyleshow as $i=>$v):
  
  ?>
  <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
          <td align="center">
		  <table width="155" height="128" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC">
		  <tbody>
		  <tr>
                <td bgcolor="#FFFFFF"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairstyleshow/view',array('id'=>$v['id']));?>"><img src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadUrl'].'/'.$v->uploadFields['picture'].'/'.$v['picture'];?>" width="155" height="128" border="0"></a></td>
		  </tr>
          </tbody>
          </table>
          </td>
        </tr>
      	</tbody>
    </table>
   </td>
   <?php endforeach;?>
 

    </tr>

</tbody></table>

</td>

  </tr>

</tbody></table>

<!--发型欣赏 end-->	









	<!--美发产品  begin-->

<table width="700" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-left:7px;margin-top:18px;">
  <tbody><tr>
    <td align="left" valign="top" class="box0_t"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairproducts');?>">美发产品</a></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="box0_m"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
  <tr>
  <?php 
  foreach ($hairproducts as $i=>$v):
  
  ?>
    <td>
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	        <tbody>
	        <tr>
	          <td align="center">
			  <table width="155" height="128" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC">
	              <tbody>
	              <tr>
	                <td bgcolor="#FFFFFF"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairproducts/view',array('id'=>$v['id']));?>"><img src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadUrl'].'/'.$v->uploadFields['picture'].'/'.$v['picture'];?>" width="155" height="128" border="0"></a></td>
	              </tr>
	            </tbody></table>
	          </td>
	        </tr>
	      </tbody>
	    </table>
	</td>
<?php endforeach;?>
    


    </tr>

</tbody></table>

</td>

  </tr>

</tbody></table>

<!--美发产品 end-->	

		

	

	

	

	

	</td>

	<td width="16">&nbsp;</td>

    <td width="277" align="left" valign="top">

	

	

	

		<!--最新动? begin-->

	<table width="270" height="287" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-top: 14px;">

  <tbody><tr>

    <td align="left" valign="top" class="box0_t">展示</td>

  </tr>

  <tr>

    <td align="left" valign="top" class="box0_m" style="padding:11px;8px">

<table width="250"  border="0" cellspacing="0" cellpadding="0" align="center">

  <tbody><tr>

    <td>
        <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider-r" class="nivoSlider">
                
                <a href="http://dev7studios.com"><img  src="<?php echo Yii::app()->baseUrl;?>/images/indexslider-r2.png" data-thumb="<?php echo Yii::app()->baseUrl;?>/images/indexslider-r2.png" alt="" title="This is an example of a caption" /></a>
               <img  src="<?php echo Yii::app()->baseUrl;?>/images/indexslider-r1.png" data-thumb="<?php echo Yii::app()->baseUrl;?>/images/indexslider-r1.png" alt="" />

            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
    </div>

    
    </td>

  </tr>

</tbody></table>



</td>

  </tr>

</tbody></table>

<!--最新动?end-->	







		<!--最新活动  begin-->

	<table width="270" height="209" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-top:18px;">

  <tbody>
  <tr>
    <td align="left" valign="top" class="box0_t"><a target="_blank" href="<?php echo Yii::app()->createUrl('specialoffers');?>">最新活动</a></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="box0_m"><!--  index newslist start -->

	<ul id="newslist2">
		<?php 
		foreach ($specialoffers as $i=>$v):
		
		?>
			<li>
				<a target="_blank" href="<?php echo Yii::app()->createUrl('specialoffers/view',array('id'=>$v['id']));?>" title="<?php echo $v['title'];?>"><?php echo $v['title'];?></a>
			</li>
		<?php endforeach;?>		
	</ul>

<!-- index newslist end -->

</td>

  </tr>

</tbody></table>

<!--活动预告 end-->	







		<!--美发知识  begin-->

<table width="270" height="400" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-top:18px;">
	<tbody>
	<tr>
    	<td align="left" valign="top" class="box0_t"><a href="<?php echo Yii::app()->createUrl('knowledge')?>">美发知识</a></td>
  	</tr>
  	<tr>
    <td align="left" valign="top" class="box0_m"><!--  index newslist start -->
	<ul id="newslist2">
		<?php 
		foreach($knowledge as $i=>$v):
		?>
			<li>
			<a target="_blank" href="<?php echo Yii::app()->createUrl('knowledge/view',array('id'=>$v['id']));?>" title="<?php echo $v['title'];?>"><?php echo $v['title'];?></a>
			</li> 
		<?php endforeach;?>
	</ul>

<!-- index newslist end -->

</td>

  </tr>

</tbody></table>

<!--美发知识 end-->	

	





		
	

	</td>

  </tr>

</tbody></table>

<script type="text/javascript">
jQuery(window).load(function(){
	jQuery("#slider").nivoSlider({
		effect:"random",
		slices:15,
		boxCols:8,
		boxRows:4,
		animSpeed:500,
		pauseTime:300000,
		startSlide:0,
		directionNav:true,
		directionNavHide:true,
		controlNav:true,
		controlNavThumbs:false,
		controlNavThumbsFromRel:true,
		keyboardNav:true,
		pauseOnHover:true,
		manualAdvance:false
	});



        $('#slider-r').nivoSlider({
        	//controlNav: false, // 显示序列导航  
        	 effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
             slices: 15, // For slice animations
             boxCols: 8, // For box animations
             boxRows: 4, // For box animations
             animSpeed: 500, // Slide transition speed
             pauseTime: 3000, // How long each slide will show
             startSlide: 0, // Set starting Slide (0 index)
             directionNav: true, // Next & Prev navigation
             directionNavHide: true, // Only show on hover
             controlNav: false, // 1,2,3... navigation
             controlNavThumbs: false, // Use thumbnails for Control Nav
             pauseOnHover: true, // Stop animation while hovering
             manualAdvance: false, // Force manual transitions
             prevText: 'Prev', // Prev directionNav text
             nextText: 'Next', // Next directionNav text
             randomStart: false, // Start on a random slide
             beforeChange: function(){}, // Triggers before a slide transition
             afterChange: function(){}, // Triggers after a slide transition
             slideshowEnd: function(){}, // Triggers after all slides have been shown
             lastSlide: function(){}, // Triggers when last slide is shown
             afterLoad: function(){} // Triggers when slider has loaded
            });

  }); 
</script>
<style>

.theme-default .nivo-controlNav {
	position: absolute;
	left: 50%;
	bottom: 0px;
	margin-left: -88px;
	z-index:10;
	/*border:1px solid red;*/
	width:132px;
}
.theme-default .nivo-controlNav a{
	z-index:10;
	display:block;
	float:left;

}
.theme-default .nivo-caption{
	text-align:left;
	} 

</style>