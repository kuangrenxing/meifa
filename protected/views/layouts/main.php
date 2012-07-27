<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!--[if lte IE 6]>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/css/ie6_nav.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<!--[if lte IE 7]>
	<link href="<?php echo Yii::app()->request->baseUrl;?>/css/ie7_nav.css" rel="stylesheet" type="text/css">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<body id="mainbody_bg">



<!--top   beigin-->
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="topnav">
  <tbody><tr>
    <td rowspan="2" class="logo" align="left" valign="top"><a href="http://t.mobanku.com/00846/"><img border="0" alt="" src="<?php echo Yii::app()->baseUrl;;?>/images/logo.gif"></a></td>
    <td align="left" valign="top" class="tel">咨询热线：<span>13682100938</span></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="nav"><div id="global-header">
<div class="nav">
<ul>
    <li><a href="<?php echo Yii::app()->baseUrl;?>/">网站首页</a></li>
    <li class="on"><a href="<?php echo Yii::app()->createUrl("about");?>">关于我们</a></li>
    <li><a href="<?php echo Yii::app()->createUrl("hairstylist");?>">发型艺术家</a></li>
    <li><a href="<?php echo Yii::app()->createUrl("hairstyleshow");?>">发型展示</a></li>
    <li><a href="<?php echo Yii::app()->createUrl("hairproducts");?>">美发产品</a></li>
    <li><a href="<?php echo Yii::app()->createUrl("join");?>">在线加盟</a></li>
    <li><a href="<?php echo Yii::app()->createUrl("specialoffers");?>">优惠信息</a></li>
    <li><a href="<?php echo Yii::app()->createUrl("careers");?>">招贤纳士</a></li>
    <li><a href="<?php echo Yii::app()->createUrl("contact");?>">联系我们</a></li>
</ul>
</div>
</div></td>
  </tr>
</tbody></table>
<!--top   end-->

	<?php echo $content; ?>

<!--版权  开始-->
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" id="footer">
  <tbody><tr>
    <td class="copyright">Copyright © 2010&nbsp;<a href="http://www.xxx.cn/">美</a>力极国际美发连锁机构 All Rights Reserved.Copyright</td>
  </tr>
</tbody></table>
<!--版权  结束-->




</div>



</body></html>
