<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'user_id'); ?>
		<div class="input">
			<?php echo $form->textField($model,'user_id'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'user_name'); ?>
		<div class="input">
			<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'salt'); ?>
		<div class="input">
			<?php echo $form->textField($model,'salt',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'email'); ?>
		<div class="input">
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'Profile'); ?>
		<div class="input">
			<?php echo $form->textArea($model,'Profile',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->