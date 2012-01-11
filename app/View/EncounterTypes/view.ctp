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
		<dt><?php echo __('Medications'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['medications']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Dosage'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['m_dosage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allergies'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['allergies']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serious Reaction'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['serious_reaction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Problems'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['problems']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subjective'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['subjective']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objective'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['objective']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assessment'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['assessment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plan'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['plan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prescriptions'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['prescriptions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P Dosage'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['p_dosage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($encounterType['EncounterType']['contact']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Encounter Type'), array('action' => 'edit', $encounterType['EncounterType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Encounter Type'), array('action' => 'delete', $encounterType['EncounterType']['id']), null, __('Are you sure you want to delete # %s?', $encounterType['EncounterType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounter Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
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

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
