<?php
/* @var $this LelongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lelongs',
);

$this->menu=array(
	array('label'=>'Create Lelong', 'url'=>array('create')),
	array('label'=>'Manage Lelong', 'url'=>array('admin')),
);
?>

<h1>Lelongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
