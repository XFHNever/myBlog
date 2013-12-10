<?php
$this->pageCaption=$this->id . '/' . $this->action->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription=Yii::app()->name . ' Post Controller page';
$this->breadcrumbs=array(
	'Post Controller',
);?>
<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
