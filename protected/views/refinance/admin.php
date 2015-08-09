<?php
$this->breadcrumbs = array(
    'Refinances' => array('admin'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Refinance', 'url' => array('index')),
    array('label' => 'Create Refinance', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('refinance-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Refinances</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'refinance-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'name',
        'propinfo',
        array(
            'name' => 'banker',
            'value' => 'Lookup::item("banker",$data->banker)',
            'filter' => Lookup::items("banker"),
        ),
        array(
            'name' => 'status',
            'value' => 'Lookup::item("ref_status",$data->status)',
            'filter' => Lookup::items("ref_status"),
        ),
        array(
            'name' => 'lawyer',
            'value' => 'Lookup::item("lawyer",$data->lawyer)',
            'filter' => Lookup::items("lawyer"),
        ),
        'outstanding',
        /*
         * array(
          'name' => 'create_time',
          'value' => date('F j, Y', $model->create_time),
          ),
         * 
         * 
          'bank',
          'outstanding',
          'interest',
          'income',
          'houseln',
          'othersln',
          'notes',
          'admin_note',
          'create_time',
          'update_time',
         * array(
          'name' => 'create_time',
          'value' => date('F j, Y', $model->create_time),
          ),
          array(
          'name' => 'update_time',
          'value' => date('F j, Y', $model->update_time),
          ),
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
