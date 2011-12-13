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

<div class="related">
    <br />
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
</div>
