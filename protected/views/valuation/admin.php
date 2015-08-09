<?php
$this->breadcrumbs = array(
    'Valuations' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Valuation', 'url' => array('index')),
    array('label' => 'Create Valuation', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('valuation-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Valuations</h1>

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
    'id' => 'valuation-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'name',
        'phone',
        array(
            'name' => 'objective',
            'value' => 'Lookup::item("valuetype",$data->objective)',
            'filter' => Lookup::items("valuetype"),
        ),
         array(
                    'name'=>'note',
                    'value'=>'$data->note',
                    'htmlOptions'=>array('width'=>'30%'),
                    ),
        'admin_note',
        /*
          'landarea',
          'buildup',
          'add1',
          'add2',
          'add3',
          'postcode',
          'state',
          'renovation',
          'note',
          'create_time',
          'update_time',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
