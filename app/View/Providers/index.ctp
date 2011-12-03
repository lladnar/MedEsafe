<div class="providers index">
	<h2><?php echo __('Providers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('patient_id');?></th>
			<th><?php echo $this->Paginator->sort('insurance_company');?></th>
			<th><?php echo $this->Paginator->sort('group_number');?></th>
			<th><?php echo $this->Paginator->sort('id_number');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_name');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_relationship');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_ssn');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_dob');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_address');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_city');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_state');?></th>
			<th><?php echo $this->Paginator->sort('subscriber_zip');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($providers as $provider): ?>
	<tr>
		<td><?php echo h($provider['Provider']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($provider['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $provider['Patient']['id'])); ?>
		</td>
		<td><?php echo h($provider['Provider']['insurance_company']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['group_number']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['id_number']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_name']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_relationship']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_ssn']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_dob']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_address']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_city']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_state']); ?>&nbsp;</td>
		<td><?php echo h($provider['Provider']['subscriber_zip']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $provider['Provider']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $provider['Provider']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $provider['Provider']['id']), null, __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Provider'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
