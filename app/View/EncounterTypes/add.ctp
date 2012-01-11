<div class="encounterTypes form">
<?php echo $this->Form->create('EncounterType');?>
	<fieldset>
		<legend><?php echo __('Add Encounter Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('medications');
		echo $this->Form->input('m_dosage');
		echo $this->Form->input('allergies');
		echo $this->Form->input('serious_reaction');
		echo $this->Form->input('problems');
		echo $this->Form->input('subjective');
		echo $this->Form->input('objective');
		echo $this->Form->input('assessment');
		echo $this->Form->input('plan');
		echo $this->Form->input('prescriptions');
		echo $this->Form->input('p_dosage');
		echo $this->Form->input('status');
		echo $this->Form->input('contact');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Encounter Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
