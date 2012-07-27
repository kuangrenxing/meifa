<?php
$cs=Yii::app()->clientScript;
$baseUrl=$this->module->assetsUrl;
$cs->registerCssFile($baseUrl.'/css/base.css');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="" > 
<head> 
    <title>Yii Administration - <?php echo $this->pageTitle; ?></title> 
    <meta name="robots" content="NONE,NOARCHIVE" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head> 
<body class="dashboard"> 
    <div id="container"> 

<div id="header"> 
    <div class="branding">&nbsp;</div> 
    <div class="admin-title">Yii Administration</div> 
	<ul class="nav">
		<li><a class="active" href="">公司简介</a></li>
		<li><a href="">发型师</a></li>
		<li><a href="">发型展示</a></li>
		<li><a href="">发型产品</a></li>
		<li><a href="">在线加盟</a></li>
		<li><a href="">优惠信息</a></li>
		<li><a href="">招贤纳士</a></li>
		<li><a href="">联系我们</a></li>
	</ul>
        <ul id="user-tools"> 
            <li><a href="#" class="user-options-handler collapse-handler"><?php echo Yii::app()->user->name;?></a></li>
            <li><a href="<?php echo $this->createUrl('/yiiadmin/default/logout'); ?>" class="user-options-handler collapse-handler"><?php echo YiiadminModule::t('Выход'); ?></a></li>
        </ul> 
</div> 
 
    <?php 
        $message=Yii::app()->user->getFlash('flashMessage');
        if ($message): 
    ?> 
    <ul class="messagelist">
        <li><?php echo $message; ?></li>
    </ul>
    <?php endif; ?>

    <!-- BREADCRUMBS --> 
    <div id="breadcrumbs">
    <?php
    $this->widget('zii.widgets.CBreadcrumbs', array(
        'homeLink'=>CHtml::link(YiiadminModule::t('Главная'),array('/yiiadmin')),
        'links'=>$this->breadcrumbs
        )
    ); 
    ?>
    </div>
        
    <!-- CONTENT --> 
    <div id="content" class="content-flexible"> 
            
    <h1><?php echo $this->pageTitle; ?></h1> 
 
        <?php
            echo $content;
        ?>
        <br class="clear" /> 
        </div>     
        <!-- FOOTER --> 
        <div id="footer"></div> 
        
    </div> 
</body> 
</html> 
 
