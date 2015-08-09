<?php
$this->breadcrumbs = array(
    'Refinances' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Refinance', 'url' => array('index')),
    array('label' => 'Create Refinance', 'url' => array('create')),
    array('label' => 'Update Refinance', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Refinance', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Refinance', 'url' => array('admin')),
);
?>

<h1>View Refinance #<?php echo $model->id; ?></h1>

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
            'value' => Lookup::item('refinancetype', $model->objective)
        ),
        'propinfo',
        'current_value',
        'bank',
        'outstanding',
        'interest',
        'income',
        'houseln',
        'othersln',
        array(
            'name' => 'status',
            'value' => Lookup::item('ref_status', $model->status)
        ),
        array(
            'name' => 'banker',
            'value' => Lookup::item('banker', $model->banker)
        ),
        array(
            'name' => 'lawyer',
            'value' => Lookup::item('lawyer', $model->lawyer)
        ),
        'referal_fee',
        'payment_date',
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
            'value' => "for refinance \n" . "Objective " . Lookup::item('refinancetype', $model->objective) . ", " .$model->name . ", " . $model->phone . ", " . $model->email . "," . $model->propinfo
            . "," . $model->bank . ", Outstanding RM " . $model->outstanding . ", Current Value " . $model->current_value . ", Income RM " . $model->income . "," . $model->notes,
        ),
    ),
));
?>


