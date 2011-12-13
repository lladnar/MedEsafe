<div class="aerSearches index">
	<h2><?php echo __('AER Searches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>			
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($aerSearches as $aerSearch):?>
	<tr>
		<td><?php echo h($aerSearch['AerSearch']['name']);?>&nbsp;</td>
		<td><?php echo h($aerSearch['AerSearch']['active']) == 1 ? 'yes' : 'no';?>&nbsp;</td>		
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $aerSearch['AerSearch']['id']));?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aerSearch['AerSearch']['id']));?>
			<?php if ($aerSearch['AerSearch']['id'] > 8) echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aerSearch['AerSearch']['id']), null, __('Are you sure you want to delete # %s?', $aerSearch['AerSearch']['id']));?>
		</td>
	</tr>
    <?php endforeach;?>
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
        <td class="actions"><?php echo $this->Html->link(__('New AER Search'), array('action' => 'add'));?></td>        
    </table>
    
    <div align="right"><?php echo $this->Html->link(__('Back to Management'), array('action' => 'manage'));?></div>
</div>