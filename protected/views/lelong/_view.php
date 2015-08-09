<?php
/* @var $this LelongController */
/* @var $data Lelong */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference_no')); ?>:</b>
	<?php echo CHtml::encode($data->reference_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserve_price')); ?>:</b>
	<?php echo CHtml::encode($data->reserve_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_address')); ?>:</b>
	<?php echo CHtml::encode($data->property_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_size')); ?>:</b>
	<?php echo CHtml::encode($data->property_size); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('restriction')); ?>:</b>
	<?php echo CHtml::encode($data->restriction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_description')); ?>:</b>
	<?php echo CHtml::encode($data->property_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_type')); ?>:</b>
	<?php echo CHtml::encode($data->property_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auction_date')); ?>:</b>
	<?php echo CHtml::encode($data->auction_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mode')); ?>:</b>
	<?php echo CHtml::encode($data->mode); ?>
	<br />

	*/ ?>

</div>