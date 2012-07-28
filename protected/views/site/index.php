<!--adpic   begin-->

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td align="center" valign="top">

<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">

  <tbody><tr>

    <td>
    <script type="text/javascript">

    //imgLink3="";

     var focus_width=1000	

     var focus_height=281

     var text_height=0

     var swf_height = focus_height+text_height

     var pics="uploadfile/p/index/001.jpg|UploadFile/10113122036.jpg|UploadFile/10113122724.jpg"

     var links="23|23234|www.mobanku.com"

     var texts="23|234532|werwer"

     var flashCode = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/hotdeploy/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">';

     flashCode = flashCode + '<param name="allowScriptAccess" value="sameDomain"/><param name="movie" value="include/focus.swf"/><param name="quality" value="high"><param name="bgcolor" value="#F0F0F0"/>';

     flashCode = flashCode + '<param name="menu" value="false"/><param name="wmode" value="transparent"/>';

     flashCode = flashCode + '<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'"/>';

     flashCode = flashCode + '<embed src="include/focus.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+ focus_width +'" height="'+ swf_height +'" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" wmode="transparent"/></embed>';

     flashCode = flashCode + '</object>';

     document.write(flashCode)

</script>
<!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/hotdeploy/flash/swflash.cab#version=6,0,0,0" width="1000" height="281"><param name="allowScriptAccess" value="sameDomain"><param name="movie" value="include/focus.swf"><param name="quality" value="high"><param name="bgcolor" value="#F0F0F0"><param name="menu" value="false"><param name="wmode" value="transparent"><param name="FlashVars" value="pics=uploadfile/p/index/001.jpg|UploadFile/10113122036.jpg|UploadFile/10113122724.jpg&amp;links=23|23234|www.mobanku.com&amp;texts=23|234532|werwer&amp;borderwidth=1000&amp;borderheight=281&amp;textheight=0"><embed src="include/focus.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1000" height="281" flashvars="pics=uploadfile/p/index/001.jpg|UploadFile/10113122036.jpg|UploadFile/10113122724.jpg&amp;links=23|23234|www.mobanku.com&amp;texts=23|234532|werwer&amp;borderwidth=1000&amp;borderheight=281&amp;textheight=0" wmode="transparent"></object>-->
    
    </td>

  </tr>

</tbody></table>



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

    <td align="left" valign="top" class="box1_t">美力极</td>

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

    <td align="left" valign="top" class="box1_t">发行艺术</td>

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
				<p style="padding-top:15px;">座右铭：<?php echo $v['motto'];?></p>
		
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
    <td align="left" valign="top" class="box1_t">金牌项目</td>
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
    	<td align="left" valign="top" class="box0_t">名师风采</td>
  	</tr>
  	<tr>
    	<td align="left" valign="top" class="box0_m"><table width="100%" border="0" cellspacing="2" cellpadding="2">
		<tbody>
		<tr>
		<?php
		foreach($hairstylist as $i=>$v): 
		if($i>3)	break;
			
		?>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
			        <tbody>
			        <tr>
			          <td align="center">
					  <table width="155" height="128" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC">
						<tbody>
							<tr>
			                	<td bgcolor="#FFFFFF"><a target="_blank" href="<?php echo Yii::app()->createUrl('hairstylist/view',array('id'=>$v['id']));?>"><img src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadUrl'].'/'.$v->uploadFields['picture'].'/'.$v['picture'];?>" width="155" height="128" border="0"></a></td>
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
    	<?php endforeach;?>
      

    


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
	    <td align="left" valign="top" class="box0_t">发型欣赏</td>
	  </tr>
  <tr>
    <td align="left" valign="top" class="box0_m"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
  <tr>
  <?php 
  foreach ($hairstyleshow as $i=>$v):
  if($i>3) break;
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
    <td align="left" valign="top" class="box0_t">美发产品</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="box0_m"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
  <tr>
  <?php 
  foreach ($hairproducts as $i=>$v):
  if($i>3) break;
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

	<table width="270" border="0" cellspacing="0" cellpadding="0" id="box1">

  <tbody><tr>

    <td align="left" valign="top" class="box0_t">最新动</td>

  </tr>

  <tr>

    <td align="left" valign="top" class="box0_m">

<table width="250" border="0" cellspacing="0" cellpadding="0" align="center">

  <tbody><tr>

    <td><script type="text/javascript">

    //imgLink3="";

     var focus_width=250	

     var focus_height=258

     var text_height=0

     var swf_height = focus_height+text_height

     var pics="uploadfile/p/index/01.jpg|uploadfile/p/index/01.jpg|uploadfile/p/index/01.jpg|uploadfile/p/index/01.jpg|uploadfile/p/index/01.jpg|uploadfile/p/index/01.jpg"

     var links="about.asp|index.asp|contact.asp|sales.asp|index.asp|index.asp"

     var texts="ddddd|eeeee|fffff|ggggg|qqq|qqq"

     var flashCode = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/hotdeploy/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">';

     flashCode = flashCode + '<param name="allowScriptAccess" value="sameDomain"/><param name="movie" value="include/focus.swf"/><param name="quality" value="high"><param name="bgcolor" value="#F0F0F0"/>';

     flashCode = flashCode + '<param name="menu" value="false"/><param name="wmode" value="transparent"/>';

     flashCode = flashCode + '<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'"/>';

     flashCode = flashCode + '<embed src="include/focus.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+ focus_width +'" height="'+ swf_height +'" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" wmode="transparent"/></embed>';

     flashCode = flashCode + '</object>';

     document.write(flashCode)

</script></td>

  </tr>

</tbody></table>



</td>

  </tr>

</tbody></table>

<!--最新动?end-->	







		<!--最新活动  begin-->

	<table width="270" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-top:10px;">

  <tbody>
  <tr>
    <td align="left" valign="top" class="box0_t">最新活动</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="box0_m"><!--  index newslist start -->

	<ul id="newslist2">
		<?php 
		foreach ($specialoffers as $i=>$v):
		if($i>6) break;
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

	<table width="270" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-top:10px;">

  <tbody><tr>

    <td align="left" valign="top" class="box0_t">美发知识</td>

  </tr>

  <tr>

    <td align="left" valign="top" class="box0_m"><!--  index newslist start -->

<ul id="newslist2">



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=280" title="南京蒜价突破10元超过肉价 据称大蒜遭囤积炒作">南京蒜价突破10元超过肉价</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=279" title="西三角概念再起">西三角概念再起</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=278" title="发挥科技优势 加快企业发展">发挥科技优势 加快企业发展</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=277" title="义乌向全球招揽企业总部落户 两杭企已前去考察">义乌向全球招揽企业总部落户</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=276" title="首钢集团被指违反澳公司法 收购澳矿遇阻">首钢集团被指违反澳公司法 </a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=271" title="华谊兄弟 《唐山大地震》上映提振业绩">华谊兄弟 《唐山大地震》上</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=256" title="华谊兄弟 《唐山大地震》上映提振业绩">华谊兄弟 《唐山大地震》上</a>

</li> 



</ul>

<!-- index newslist end -->

</td>

  </tr>

</tbody></table>

<!--美发知识 end-->	

	





		<!--美发动? begin-->

	<table width="270" border="0" cellspacing="0" cellpadding="0" id="box1" style="margin-top:10px;">

  <tbody><tr>

    <td align="left" valign="top" class="box0_t">美发动</td>

  </tr>

  <tr>

    <td align="left" valign="top" class="box0_m"><!--  index newslist start -->

<ul id="newslist2">



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=270" title="关于如何保养自己的秀发，美眉最爱">关于如何保养自己的秀发，美</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=269" title="关于如何保养自己的秀发，美眉最爱">关于如何保养自己的秀发，美</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=268" title="关于如何保养自己的秀发，美眉最爱">关于如何保养自己的秀发，美</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=267" title="关于如何保养自己的秀发，美眉最爱">关于如何保养自己的秀发，美</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=266" title="关于如何保养自己的秀发，美眉最爱">关于如何保养自己的秀发，美</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=265" title="关于如何保养自己的秀发，美眉最爱">关于如何保养自己的秀发，美</a>

</li> 



<li>



	<a target="_blank" href="http://t.mobanku.com/00846/news.asp?id=264" title="关于如何保养自己的秀发，美眉最爱">关于如何保养自己的秀发，美</a>

</li> 



</ul>

<!-- index newslist end -->

</td>

  </tr>

</tbody></table>

<!--美发动?end-->		

	

	</td>

  </tr>

</tbody></table>
