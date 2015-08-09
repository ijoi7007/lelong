<?php
/* @var $this ListingController */
/* @var $data Listing */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('listingid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->listingid), array('view', 'id'=>$data->listingid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folder')); ?>:</b>
	<?php echo CHtml::encode($data->folder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propcategory')); ?>:</b>
	<?php echo CHtml::encode($data->propcategory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proptype')); ?>:</b>
	<?php echo CHtml::encode($data->proptype); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('titletype')); ?>:</b>
	<?php echo CHtml::encode($data->titletype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landarea')); ?>:</b>
	<?php echo CHtml::encode($data->landarea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buildup')); ?>:</b>
	<?php echo CHtml::encode($data->buildup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room')); ?>:</b>
	<?php echo CHtml::encode($data->room); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bathroom')); ?>:</b>
	<?php echo CHtml::encode($data->bathroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address1')); ?>:</b>
	<?php echo CHtml::encode($data->address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address3')); ?>:</b>
	<?php echo CHtml::encode($data->address3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reno')); ?>:</b>
	<?php echo CHtml::encode($data->reno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asking')); ?>:</b>
	<?php echo CHtml::encode($data->asking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>