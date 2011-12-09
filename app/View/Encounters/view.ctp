<div class="encounters view">
<h2><?php  echo __('Encounter');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $encounter['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encounter Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['EncounterType']['id'], array('controller' => 'encounter_types', 'action' => 'view', $encounter['EncounterType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['User']['name'], array('controller' => 'users', 'action' => 'view', $encounter['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appointment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['Appointment']['id'], array('controller' => 'appointments', 'action' => 'view', $encounter['Appointment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attachment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($encounter['Attachment']['name'], array('controller' => 'attachments', 'action' => 'view', $encounter['Attachment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Time'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['date_time']); ?>
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
<div class="related">
	<h3><?php echo __('Related Activity Logs');?></h3>
	<?php if (!empty($encounter['ActivityLog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Appointment Id'); ?></th>
		<th><?php echo __('Encounter Id'); ?></th>
		<th><?php echo __('Provider Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($encounter['ActivityLog'] as $activityLog): ?>
		<tr>
			<td><?php echo $activityLog['id'];?></td>
			<td><?php echo $activityLog['user_id'];?></td>
			<td><?php echo $activityLog['appointment_id'];?></td>
			<td><?php echo $activityLog['encounter_id'];?></td>
			<td><?php echo $activityLog['provider_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activity_logs', 'action' => 'view', $activityLog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'activity_logs', 'action' => 'edit', $activityLog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activity_logs', 'action' => 'delete', $activityLog['id']), null, __('Are you sure you want to delete # %s?', $activityLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity Log'), array('controller' => 'activity_logs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Attachments');?></h3>
	<?php if (!empty($encounter['Attachment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Encounter Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($encounter['Attachment'] as $attachment): ?>
		<tr>
			<td><?php echo $attachment['id'];?></td>
			<td><?php echo $attachment['patient_id'];?></td>
			<td><?php echo $attachment['encounter_id'];?></td>
			<td><?php echo $attachment['name'];?></td>
			<td><?php echo $attachment['filename'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attachments', 'action' => 'view', $attachment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attachments', 'action' => 'edit', $attachment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attachments', 'action' => 'delete', $attachment['id']), null, __('Are you sure you want to delete # %s?', $attachment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attachment'), array('controller' => 'attachments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
