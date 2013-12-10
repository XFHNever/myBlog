<?php
$this->pageCaption='Tags';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='List of all tags';
$this->breadcrumbs=array(
	'Tags',
);

$this->menu=array(
	array('label'=>'Create Tag', 'url'=>array('create')),
	array('label'=>'Manage Tag', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
