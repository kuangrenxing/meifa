<?php
    $this->pageTitle=$title;
?>
<div class="form login">
<?php $form=$this->beginWidget('CActiveForm'); ?>
	<p><?php echo YiiadminModule::t( 'Пожалуйста, укажите пароль.'); ?></p>
	<div >
	<?php echo $form->labelEx($model,'username'); ?>
	<?php echo $form->passwordField($model,'username'); ?>
	<?php echo $form->error($model,'username'); ?>
	</div>
	<div>
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
</div>
	<?php echo CHtml::submitButton('Enter'); ?>

<?php $this->endWidget(); ?>
</div><!-- form -->
