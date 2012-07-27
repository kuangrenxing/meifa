<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php header("Content-Type:text/html;charset=utf-8");?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hairstylist-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->fileField($model,'avatar'); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'picture'); ?>
		<?php echo $form->fileField($model,'picture'); ?>
		<?php echo $form->error($model,'picture'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->