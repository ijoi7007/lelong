<?php
/* @var $this LelongController */
/* @var $model Lelong */

$this->breadcrumbs=array(
	'Lelongs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lelong', 'url'=>array('index')),
	array('label'=>'Create Lelong', 'url'=>array('create')),
	array('label'=>'Update Lelong', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lelong', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lelong', 'url'=>array('admin')),
);
?>

<h1>Lelong #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'reference_no',
		'reserve_price',
		'property_address',
		'area',
		'state',
		'property_size',
		'restriction',
		'property_description',
		'property_type',
		'auction_date',
		'mode',
	),
)); ?>
