<?php
$this->breadcrumbs = array(
    'Loans' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Loan', 'url' => array('index')),
    array('label' => 'Create Loan', 'url' => array('create')),
    array('label' => 'Update Loan', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Loan', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Loan', 'url' => array('admin')),
);
?>

<h1>View Loan #<?php echo $model->id; ?></h1>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        'phone',
        'email',
        'propinfo',
        'income',
        'commitment',
        'notes',
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
            . "," . $model->income . "," . $model->commitment . "," . $model->notes,
        ),
    ),
));
?>
