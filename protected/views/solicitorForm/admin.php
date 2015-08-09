<?php
$this->breadcrumbs = array(
    'Solicitor Forms' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Solicitor', 'url' => array('index')),
    array('label' => 'Create Solicitor', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('solicitor-form-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Solicitor Forms</h1>

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
    'id' => 'solicitor-form-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'nama',
        'phone',
        'propinfo',
        array(
            'name' => 'service',
            'value' => 'Lookup::item("solicitor_type",$data->service)',
            'filter' => Lookup::items("solicitor_type"),
        ),
        'price',
        array(
            'name'=>'create_time',
            'value'=>'date("j-m-Y", $data->create_time)',
        ),
        /*
          'note',
          'created_time',
          'updated_time',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
