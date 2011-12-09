<div class="pdrs form">
<?php echo $this->Form->create('Pdr');?>
	<fieldset>
		<legend><?php echo __('Add Pdr'); ?></legend>
	<?php
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pdrs'), array('action' => 'index'));?></li>
	</ul>
</div>
