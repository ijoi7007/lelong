<?php
/* @var $this ListingController */
/* @var $model Listing */

$this->breadcrumbs=array(
	'Listings'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Listing', 'url'=>array('index')),
	array('label'=>'Create Listing', 'url'=>array('create')),
	array('label'=>'Update Listing', 'url'=>array('update', 'id'=>$model->listingid)),
	array('label'=>'Delete Listing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->listingid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Listing', 'url'=>array('admin')),
);
?>

<h1>View Listing #<?php echo $model->listingid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'listingid',
		'name',
		'phone',
		'email',
		'folder',
		array(
			'name'=>'propcategory',
			'value'=>Lookup::item('propcat', $model->propcategory)
		),
		array(
			'name'=>'proptype',
			'value'=>Lookup::item('proptype', $model->proptype)
		),
		array(
			'name'=>'titletype',
			'value'=>Lookup::item('titletype', $model->titletype)
		),
		'landarea',
		'buildup',
		'room',
		'bathroom',
		'address1',
		'address2',
		'address3',
		'postcode',
		array(
			'name'=>'state',
			'value'=>Lookup::item('state', $model->state)
		),
		'reno',
		'asking',
		'value',
		'note',
		array(
			'name'=>'status',
			'value'=>Lookup::item('status', $model->status)
		),
		array(
			'name'=>'create_time',
			'type'=>'date',
		),
		array(
			'name'=>'update_time',
			'type'=>'date',
		),
	),
)); ?>
