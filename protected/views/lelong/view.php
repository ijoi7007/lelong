<?php
/* @var $this LelongController */
/* @var $model Lelong */

$this->breadcrumbs=array(
	'Lelongs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'All Lelong', 'url'=>array('index')),
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
