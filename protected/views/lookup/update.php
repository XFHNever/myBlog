<?php
$this->pageCaption='Update Lookup '.$model->lookup_id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Lookups'=>array('index'),
	$model->lookup_id=>array('view','id'=>$model->lookup_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lookups', 'url'=>array('index')),
	array('label'=>'Create Lookup', 'url'=>array('create')),
	array('label'=>'View Lookup', 'url'=>array('view', 'id'=>$model->lookup_id)),
	array('label'=>'Manage Lookups', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>