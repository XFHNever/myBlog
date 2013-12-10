<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'post_title'); ?>">
		<?php echo $form->labelEx($model,'post_title'); ?>
		<div class="input">
			<?php echo $form->textField($model,'post_title',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'post_title'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'post_content'); ?>">
		<?php echo $form->labelEx($model,'post_content'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'post_content',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'post_content'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'tags'); ?>">
		<?php echo $form->labelEx($model,'tags'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'tags'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'status'); ?>">
		<?php echo $form->labelEx($model,'status'); ?>
		<div class="input">
			<?php echo $form->textField($model,'status'); ?>
			<?php echo $form->error($model,'status'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'create_time'); ?>">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<div class="input">
			<?php echo $form->textField($model,'create_time'); ?>
			<?php echo $form->error($model,'create_time'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'update_time'); ?>">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<div class="input">
			<?php echo $form->textField($model,'update_time'); ?>
			<?php echo $form->error($model,'update_time'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'author_id'); ?>">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'author_id'); ?>
			<?php echo $form->error($model,'author_id'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->