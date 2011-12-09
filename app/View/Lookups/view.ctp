<div class="lookups view">
<h2><?php  echo __('Lookup');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lookup['Lookup']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lookup'), array('action' => 'edit', $lookup['Lookup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lookup'), array('action' => 'delete', $lookup['Lookup']['id']), null, __('Are you sure you want to delete # %s?', $lookup['Lookup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lookups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup'), array('action' => 'add')); ?> </li>
	</ul>
</div>
