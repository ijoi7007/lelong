<?php
$this->breadcrumbs = array(
    'Valuations' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Valuation', 'url' => array('index')),
    array('label' => 'Create Valuation', 'url' => array('create')),
    array('label' => 'Update Valuation', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Valuation', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Valuation', 'url' => array('admin')),
);
?>

<h1>View Valuation #<?php echo $model->id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'phone',
        'email',
        array(
            'name' => 'objective',
            'value' => Lookup::item('valuetype', $model->objective)
        ),
        'note',
        'admin_note',
        array(
            'name' => 'create_time',
            'value' => date('F j, Y', $model->create_time),
        ),
        array(
            'name' => 'update_time',
            'value' => date('F j, Y', $model->update_time),
        ),
        array(
            'name' => 'Text',
            'value' => $model->note . ", Note : " .$model->admin_note,
        ),
    ),
));
?>
