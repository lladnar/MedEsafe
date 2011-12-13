<div class="encounterTypes index">
	<h2><?php echo __('Encounter Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($encounterTypes as $encounterType): ?>
	<tr>
		<td><?php echo h($encounterType['EncounterType']['id']); ?>&nbsp;</td>
		<td><?php echo h($encounterType['EncounterType']['name']); ?>&nbsp;</td>
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
    <br />
    <table>
        <td class="actions"><?php echo $this->Html->link(__('New Encounter Type'), array('action' => 'add'));?></td>     
    </table>
	<br />
    <div align="right"><?php echo $this->Html->link(__('Back to Management'), array('controller' => 'users', 'action' => 'manage'));?></div>

</div>
