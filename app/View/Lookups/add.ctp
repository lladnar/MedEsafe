<div class="lookups form">
<?php echo $this->Form->create('Lookup');?>
	<fieldset>
		<legend><?php echo __('Add Lookup'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lookups'), array('action' => 'index'));?></li>
	</ul>
</div>
