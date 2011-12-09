<div class="encounters index">
	<h2><?php echo __('Encounters');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('patient_id');?></th>
			<th><?php echo $this->Paginator->sort('encounter_type_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('appointment_id');?></th>
			<th><?php echo $this->Paginator->sort('attachment_id');?></th>
			<th><?php echo $this->Paginator->sort('date_time');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($encounters as $encounter): ?>
	<tr>
		<td><?php echo h($encounter['Encounter']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($encounter['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $encounter['Patient']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($encounter['EncounterType']['id'], array('controller' => 'encounter_types', 'action' => 'view', $encounter['EncounterType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($encounter['User']['name'], array('controller' => 'users', 'action' => 'view', $encounter['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($encounter['Appointment']['id'], array('controller' => 'appointments', 'action' => 'view', $encounter['Appointment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($encounter['Attachment']['name'], array('controller' => 'attachments', 'action' => 'view', $encounter['Attachment']['id'])); ?>
		</td>
		<td><?php echo h($encounter['Encounter']['date_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $encounter['Encounter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $encounter['Encounter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $encounter['Encounter']['id']), null, __('Are you sure you want to delete # %s?', $encounter['Encounter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Encounter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounter Types'), array('controller' => 'encounter_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter Type'), array('controller' => 'encounter_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('controller' => 'attachments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Logs'), array('controller' => 'activity_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Log'), array('controller' => 'activity_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
