<div class="activityLogs index">
	<h2><?php echo __('Activity Logs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('appointment_id');?></th>
			<th><?php echo $this->Paginator->sort('encounter_id');?></th>
			<th><?php echo $this->Paginator->sort('provider_id');?></th>
			<th><?php echo $this->Paginator->sort('activity');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($activityLogs as $activityLog): ?>
	<tr>
		<td><?php echo h($activityLog['ActivityLog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($activityLog['User']['name'], array('controller' => 'users', 'action' => 'view', $activityLog['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activityLog['Appointment']['id'], array('controller' => 'appointments', 'action' => 'view', $activityLog['Appointment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activityLog['Encounter']['id'], array('controller' => 'encounters', 'action' => 'view', $activityLog['Encounter']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activityLog['Provider']['id'], array('controller' => 'providers', 'action' => 'view', $activityLog['Provider']['id'])); ?>
		</td>
		<td><?php echo h($activityLog['ActivityLog']['activity']); ?>&nbsp;</td>
		<td><?php echo h($activityLog['ActivityLog']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activityLog['ActivityLog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activityLog['ActivityLog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activityLog['ActivityLog']['id']), null, __('Are you sure you want to delete # %s?', $activityLog['ActivityLog']['id'])); ?>
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
