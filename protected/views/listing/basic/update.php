<?php
/* @var $this ListingController */
/* @var $model Listing */

$this->breadcrumbs=array(
	'Listings'=>array('index'),
	$model->name=>array('view','id'=>$model->listingid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Listing', 'url'=>array('index')),
	array('label'=>'Create Listing', 'url'=>array('create')),
	array('label'=>'View Listing', 'url'=>array('view', 'id'=>$model->listingid)),
	array('label'=>'Manage Listing', 'url'=>array('admin')),
);
?>

<h1>Update Listing <?php echo $model->listingid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>