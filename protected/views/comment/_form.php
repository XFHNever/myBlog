<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'comment_content'); ?>">
		<?php echo $form->labelEx($model,'comment_content'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'comment_content',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'comment_content'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'create_time'); ?>">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<div class="input">
			<?php echo $form->textField($model,'create_time'); ?>
			<?php echo $form->error($model,'create_time'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'status'); ?>">
		<?php echo $form->labelEx($model,'status'); ?>
		<div class="input">
			<?php echo $form->textField($model,'status'); ?>
			<?php echo $form->error($model,'status'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'author_name'); ?>">
		<?php echo $form->labelEx($model,'author_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'author_name',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'author_name'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'email'); ?>">
		<?php echo $form->labelEx($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'url'); ?>">
		<?php echo $form->labelEx($model,'url'); ?>
		<div class="input">
			<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'url'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'post_id'); ?>">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'post_id'); ?>
			<?php echo $form->error($model,'post_id'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->