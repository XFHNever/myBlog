<?php
$this->pageCaption='View Lookup #'.$model->lookup_id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Lookups'=>array('index'),
	$model->lookup_id,
);

$this->menu=array(
	array('label'=>'List Lookups', 'url'=>array('index')),
	array('label'=>'Create Lookup', 'url'=>array('create')),
	array('label'=>'Update Lookup', 'url'=>array('update', 'id'=>$model->lookup_id)),
	array('label'=>'Delete Lookup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->lookup_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lookups', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'baseScriptUrl'=>false,
	'cssFile'=>false,
	'attributes'=>array(
		'lookup_id',
		'lookup_name',
		'code',
		'type',
		'position',
	),
)); ?>
