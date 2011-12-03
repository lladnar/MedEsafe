<div class="appointments form">
<?php echo $this->Form->create('Appointment');?>
	<fieldset>
		<legend><?php echo __('Add Appointment'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index'));?></li>
	</ul>
</div>
