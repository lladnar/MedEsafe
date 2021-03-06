<div class="lookups index">
	<h2><?php echo __('Lookups');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lookups as $lookup): ?>
	<tr>
		<td><?php echo h($lookup['Lookup']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lookup['Lookup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lookup['Lookup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lookup['Lookup']['id']), null, __('Are you sure you want to delete # %s?', $lookup['Lookup']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
    <br />
	<h3><b><?php echo __('Under Construction...');?></b></h3>
	<br />
    <div align="right"><?php echo $this->Html->link(__('Back to Management'), array('controller' => 'users', 'action' => 'manage'));?></div>
</div>
