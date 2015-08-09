<?php
$this->breadcrumbs = array(
    'Forsales' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Forsale', 'url' => array('index')),
    array('label' => 'Create Forsale', 'url' => array('create')),
    array('label' => 'Update Forsale', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Forsale', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Forsale', 'url' => array('admin')),
);
?>

<h1>View Forsale #<?php echo $model->id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'phone',
        'email',
        'propinfo',
        'renoinfo',
        'value',
        'price',
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
            'value' => $model->name . "-" . $model->phone . "," . $model->propinfo
            . "," . $model->renoinfo . "," . $model->price,
        ),
    ),
));
?>
