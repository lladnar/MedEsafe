<div class="encounters form">
<?php echo $this->Form->create('Encounter');?>
	<fieldset>
		<legend><?php echo __('Add Encounter'); ?></legend>
	<?php
		echo $this->Form->input('patient_id');
		echo $this->Form->input('encounter_type_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('appointment_id');
		echo $this->Form->input('attachment_id');
		echo $this->Form->input('date_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Encounters'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounter Types'), array('controller' => 'encounter_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter Type'), array('controller' => 'encounter_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('controller' => 'attachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Logs'), array('controller' => 'activity_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Log'), array('controller' => 'activity_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
