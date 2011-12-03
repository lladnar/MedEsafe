<div class="providers form">
<?php echo $this->Form->create('Provider');?>
	<fieldset>
		<legend><?php echo __('Add Provider'); ?></legend>
	<?php
		echo $this->Form->input('patient_id');
		echo $this->Form->input('insurance_company');
		echo $this->Form->input('group_number');
		echo $this->Form->input('id_number');
		echo $this->Form->input('subscriber_name');
		echo $this->Form->input('subscriber_relationship');
		echo $this->Form->input('subscriber_ssn');
		echo $this->Form->input('subscriber_dob');
		echo $this->Form->input('subscriber_address');
		echo $this->Form->input('subscriber_city');
		echo $this->Form->input('subscriber_state');
		echo $this->Form->input('subscriber_zip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
