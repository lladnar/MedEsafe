<div class="encounterTypes view">
    <h2><?php  echo __('Encounter Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
    <br />
	<h3><?php echo __('Related Encounters');?></h3>
	<?php if (!empty($encounterType['Encounter'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Encounter Type Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Appointment Id'); ?></th>
		<th><?php echo __('Attachment Id'); ?></th>
		<th><?php echo __('Date Time'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($encounterType['Encounter'] as $encounter): ?>
		<tr>
			<td><?php echo $encounter['id'];?></td>
			<td><?php echo $encounter['patient_id'];?></td>
			<td><?php echo $encounter['encounter_type_id'];?></td>
			<td><?php echo $encounter['user_id'];?></td>
			<td><?php echo $encounter['appointment_id'];?></td>
			<td><?php echo $encounter['attachment_id'];?></td>
			<td><?php echo $encounter['date_time'];?></td>
			<td><?php echo $encounter['created'];?></td>
			<td><?php echo $encounter['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'encounters', 'action' => 'view', $encounter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'encounters', 'action' => 'edit', $encounter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'encounters', 'action' => 'delete', $encounter['id']), null, __('Are you sure you want to delete # %s?', $encounter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
