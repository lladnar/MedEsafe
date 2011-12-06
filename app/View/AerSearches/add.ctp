<div class="aerSearches form">
<?php echo $this->Form->create('AerSearch');?>
	<fieldset>
		<legend><?php echo __('Add Aer Search'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('active');
		echo $this->Form->input('url');
		echo $this->Form->input('regular');
		echo $this->Form->input('post_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Aer Searches'), array('action' => 'index'));?></li>
	</ul>
</div>
