<div class="encounters form">
<?php echo $this->Form->create('Encounter');?>
	<fieldset>
		<legend><?php echo __('Edit Encounter'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Encounter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Encounter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('action' => 'index'));?></li>
	</ul>
</div>
