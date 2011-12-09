<div class="appointments index">
	<h2><?php echo __('Appointments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('start_time');?></th>
			<th><?php echo $this->Paginator->sort('end_time');?></th>
			<th><?php echo $this->Paginator->sort('patient_id', 'Patient Name');?></th>
			<th><?php echo $this->Paginator->sort('user_id', 'Appointment With');?></th>
			<th><?php echo $this->Paginator->sort('scheduled_by');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($appointments as $appointment): ?>
	<tr>
		<td><?php echo h($appointment['Appointment']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Patient']['name']); ?>&nbsp;</td>
		<td><?php echo h($appointment['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['scheduled_by']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['description']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete this appointment?')); ?>
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
    <table>
        <td class="actions"><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add'));?></td>        
    </table>
</div>
