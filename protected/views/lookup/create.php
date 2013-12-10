<?php
$this->pageCaption='Create Lookup';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Define a new lookup';
$this->breadcrumbs=array(
	'Lookups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lookups', 'url'=>array('index')),
	array('label'=>'Manage Lookups', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>