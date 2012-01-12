<div class="encounterTypes index">
	<h2><?php echo __('Encounter Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('medications');?></th>
			<th><?php echo $this->Paginator->sort('m_dosage');?></th>
			<th><?php echo $this->Paginator->sort('allergies');?></th>
			<th><?php echo $this->Paginator->sort('serious_reaction');?></th>
			<th><?php echo $this->Paginator->sort('problems');?></th>
			<th><?php echo $this->Paginator->sort('subjective');?></th>
			<th><?php echo $this->Paginator->sort('objective');?></th>
			<th><?php echo $this->Paginator->sort('assessment');?></th>
			<th><?php echo $this->Paginator->sort('plan');?></th>
			<th><?php echo $this->Paginator->sort('prescriptions');?></th>
			<th><?php echo $this->Paginator->sort('p_dosage');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('contact');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($encounterTypes as $encounterType): ?>
	<tr>
		<td><?php echo h($encounterType['EncounterType']['id']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['name']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['medications']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['m_dosage']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['allergies']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['serious_reaction']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['problems']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['subjective']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['objective']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['assessment']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['plan']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['prescriptions']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['p_dosage']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['status']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['contact']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $encounterType['EncounterType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $encounterType['EncounterType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $encounterType['EncounterType']['id']), null, __('Are you sure you want to delete # %s?', $encounterType['EncounterType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Encounter Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
