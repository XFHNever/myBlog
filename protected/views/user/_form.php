<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'user_name'); ?>">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'user_name'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'user_password'); ?>">
		<?php echo $form->labelEx($model,'user_password'); ?>
		<div class="input">
			<?php echo $form->textField($model,'user_password',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'user_password'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'salt'); ?>">
		<?php echo $form->labelEx($model,'salt'); ?>
		<div class="input">
			<?php echo $form->textField($model,'salt',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'salt'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'email'); ?>">
		<?php echo $form->labelEx($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'Profile'); ?>">
		<?php echo $form->labelEx($model,'Profile'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'Profile',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'Profile'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->