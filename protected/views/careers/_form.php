<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'careers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job'); ?>
		<?php echo $form->textArea($model,'job',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requirement'); ?>
		<?php echo $form->textArea($model,'requirement',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'requirement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->