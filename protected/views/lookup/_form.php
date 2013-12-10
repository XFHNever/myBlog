<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'lookup-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'lookup_name'); ?>">
		<?php echo $form->labelEx($model,'lookup_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'lookup_name',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'lookup_name'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'code'); ?>">
		<?php echo $form->labelEx($model,'code'); ?>
		<div class="input">
			<?php echo $form->textField($model,'code'); ?>
			<?php echo $form->error($model,'code'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'type'); ?>">
		<?php echo $form->labelEx($model,'type'); ?>
		<div class="input">
			<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'type'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'position'); ?>">
		<?php echo $form->labelEx($model,'position'); ?>
		<div class="input">
			<?php echo $form->textField($model,'position'); ?>
			<?php echo $form->error($model,'position'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->