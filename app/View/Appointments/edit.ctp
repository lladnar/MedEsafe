<div class="appointments form">
<?php echo $this->Form->create('Appointment');?>
	<fieldset>
		<legend><?php echo __('Edit Appointment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('patient_name');
		echo $this->Form->input('with');
		echo $this->Form->input('by');
		echo $this->Form->input('description');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Appointment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Appointment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index'));?></li>
	</ul>
</div>
