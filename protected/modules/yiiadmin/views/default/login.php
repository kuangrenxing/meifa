<?php
    $this->pageTitle=$title;
?>
<div class="form login">
<?php $form=$this->beginWidget('CActiveForm'); ?>
	<p><?php echo YiiadminModule::t( 'Пожалуйста, укажите пароль.'); ?></p>
	
	<?php echo $form->labelEx($model,'username'); ?>
	<?php echo $form->textField($model,'username'); ?>
	<?php echo $form->error($model,'username'); ?>
	
	
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>

	<?php echo CHtml::submitButton('Enter'); ?>

<?php $this->endWidget(); ?>
</div><!-- form -->
