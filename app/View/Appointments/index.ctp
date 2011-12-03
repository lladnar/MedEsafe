<div class="appointments index">
	<h2><?php echo __('Appointments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('patient_name');?></th>
			<th><?php echo $this->Paginator->sort('with');?></th>
			<th><?php echo $this->Paginator->sort('by');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
			<th><?php echo $this->Paginator->sort('end');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($appointments as $appointment): ?>
	<tr>
		<td><?php echo h($appointment['Appointment']['id']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['patient_name']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['with']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['by']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['description']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['start']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['end']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?></li>
	</ul>
</div>
