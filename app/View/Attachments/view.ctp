<div class="attachments view">
<h2><?php  echo __('Attachment');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attachment['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $attachment['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attachment['Encounter']['id'], array('controller' => 'encounters', 'action' => 'view', $attachment['Encounter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['filename']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attachment'), array('action' => 'edit', $attachment['Attachment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attachment'), array('action' => 'delete', $attachment['Attachment']['id']), null, __('Are you sure you want to delete # %s?', $attachment['Attachment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attachments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attachment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Encounters');?></h3>
	<?php if (!empty($attachment['Encounter'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Encounter Type Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Appointment Id'); ?></th>
		<th><?php echo __('Attachment Id'); ?></th>
		<th><?php echo __('Date Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($attachment['Encounter'] as $encounter): ?>
		<tr>
			<td><?php echo $encounter['id'];?></td>
			<td><?php echo $encounter['patient_id'];?></td>
			<td><?php echo $encounter['encounter_type_id'];?></td>
			<td><?php echo $encounter['user_id'];?></td>
			<td><?php echo $encounter['appointment_id'];?></td>
			<td><?php echo $encounter['attachment_id'];?></td>
			<td><?php echo $encounter['date_time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'encounters', 'action' => 'view', $encounter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'encounters', 'action' => 'edit', $encounter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'encounters', 'action' => 'delete', $encounter['id']), null, __('Are you sure you want to delete # %s?', $encounter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
