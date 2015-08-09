<?php
$this->breadcrumbs = array(
    'Solicitor Forms' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Solicitor', 'url' => array('index')),
    array('label' => 'Create Solicitor', 'url' => array('create')),
    array('label' => 'Update Solicitor', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Solicitor', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Solicitor', 'url' => array('admin')),
);
?>

<h1>View Request Solicitor Form #<?php echo $model->id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'nama',
        'phone',
        'email',
        'propinfo',
        array(
            'name' => 'service',
            'value' => Lookup::item('solicitor_type', $model->service)
        ),
        'price',
        'note',
        array(
            'name' => 'create_time',
            'value' => date('F j, Y', $model->create_time),
        ),
        array(
            'name' => 'update_time',
            'value' => date('F j, Y', $model->update_time),
        ),
    ),
));
?>
