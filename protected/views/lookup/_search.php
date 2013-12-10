<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'lookup_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'lookup_id'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'lookup_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'lookup_name',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'code'); ?>
		<div class="input">
			<?php echo $form->textField($model,'code'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'type'); ?>
		<div class="input">
			<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'position'); ?>
		<div class="input">
			<?php echo $form->textField($model,'position'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->