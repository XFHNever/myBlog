<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'post_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'post_id'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'post_title'); ?>
		<div class="input">
			<?php echo $form->textField($model,'post_title',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'post_content'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'post_content',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'tags'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'status'); ?>
		<div class="input">
			<?php echo $form->textField($model,'status'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'create_time'); ?>
		<div class="input">
			<?php echo $form->textField($model,'create_time'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'update_time'); ?>
		<div class="input">
			<?php echo $form->textField($model,'update_time'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'author_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'author_id'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->