<div class="pdrs view">
<h2><?php  echo __('Pdr');?></h2>
	<dl>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($pdr['Pdr']['url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pdr'), array('action' => 'edit', $pdr['Pdr']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pdr'), array('action' => 'delete', $pdr['Pdr']['id']), null, __('Are you sure you want to delete # %s?', $pdr['Pdr']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pdrs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pdr'), array('action' => 'add')); ?> </li>
	</ul>
</div>
