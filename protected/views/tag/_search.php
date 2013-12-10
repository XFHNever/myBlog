<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'tag_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tag_id'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'tag_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'tag_name',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'frequency'); ?>
		<div class="input">
			<?php echo $form->textField($model,'frequency'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->