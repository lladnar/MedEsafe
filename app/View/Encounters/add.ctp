<div class="encounters form">
<?php echo $this->Form->create('Encounter');?>
	<fieldset>
		<legend><?php echo __('Add Encounter'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Encounters'), array('action' => 'index'));?></li>
	</ul>
</div>
