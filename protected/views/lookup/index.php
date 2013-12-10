<?php
$this->pageCaption='Lookups';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all lookups';
$this->breadcrumbs=array(
	'Lookups',
);

$this->menu=array(
	array('label'=>'Create Lookup', 'url'=>array('create')),
	array('label'=>'Manage Lookup', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
