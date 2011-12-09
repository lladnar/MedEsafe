<div class="encounterTypes form">
<?php echo $this->Form->create('EncounterType');?>
	<fieldset>
		<legend><?php echo __('Edit Encounter Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EncounterType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EncounterType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Encounter Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
