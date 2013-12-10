<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'comment_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'comment_id'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'comment_content'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'comment_content',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'create_time'); ?>
		<div class="input">
			<?php echo $form->textField($model,'create_time'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'status'); ?>
		<div class="input">
			<?php echo $form->textField($model,'status'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'author_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'author_name',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'url'); ?>
		<div class="input">
			<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'post_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'post_id'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->