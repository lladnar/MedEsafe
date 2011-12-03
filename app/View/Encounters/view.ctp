<div class="encounters view">
<h2><?php  echo __('Encounter');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Encounter'), array('action' => 'edit', $encounter['Encounter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Encounter'), array('action' => 'delete', $encounter['Encounter']['id']), null, __('Are you sure you want to delete # %s?', $encounter['Encounter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
