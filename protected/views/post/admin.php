<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<h1>Manage Posts</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'post_title',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->post_title), $data->getUrl())'
		),
		array(
			'name'=>'status',
			'value'=>'Lookup::item("PostStatus",$data->status)',
			'filter'=>Lookup::items('PostStatus'),
		),
		array(
			'name'=>'create_time',
			'type'=>'datetime',
			'filter'=>false,
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
