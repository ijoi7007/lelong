<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('objective')); ?>:</b>
	<?php echo CHtml::encode($data->objective); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('buildup')); ?>:</b>
	<?php echo CHtml::encode($data->buildup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add1')); ?>:</b>
	<?php echo CHtml::encode($data->add1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add2')); ?>:</b>
	<?php echo CHtml::encode($data->add2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add3')); ?>:</b>
	<?php echo CHtml::encode($data->add3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renovation')); ?>:</b>
	<?php echo CHtml::encode($data->renovation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>