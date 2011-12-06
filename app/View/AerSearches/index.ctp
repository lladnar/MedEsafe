<div class="aerSearches index">
	<h2><?php echo __('Manage AER Search');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('regular');?></th>
			<th><?php echo $this->Paginator->sort('post_value');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($aerSearches as $aerSearch): ?>
	<tr>
		<td><?php echo h($aerSearch['AerSearch']['id']); ?>&nbsp;</td>
		<td><?php echo h($aerSearch['AerSearch']['name']); ?>&nbsp;</td>
		<td><?php echo h($aerSearch['AerSearch']['active']); ?>&nbsp;</td>
		<td><?php echo h($aerSearch['AerSearch']['url']); ?>&nbsp;</td>
		<td><?php echo h($aerSearch['AerSearch']['regular']); ?>&nbsp;</td>
		<td><?php echo h($aerSearch['AerSearch']['post_value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aerSearch['AerSearch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aerSearch['AerSearch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aerSearch['AerSearch']['id']), null, __('Are you sure you want to delete # %s?', $aerSearch['AerSearch']['id'])); ?>
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
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Aer Search'), array('action' => 'add')); ?></li>
	</ul>
</div>
