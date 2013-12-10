<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'tag-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'tag_name'); ?>">
		<?php echo $form->labelEx($model,'tag_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tag_name',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'tag_name'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'frequency'); ?>">
		<?php echo $form->labelEx($model,'frequency'); ?>
		<div class="input">
			<?php echo $form->textField($model,'frequency'); ?>
			<?php echo $form->error($model,'frequency'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->