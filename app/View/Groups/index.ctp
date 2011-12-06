<div class="groups index">
	<h2><?php echo __('Groups');?></h2>
	<table cellpadding="0" cellspacing="0">
	   <tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
        </tr>
    	<?php
    	$i = 0;
    	foreach ($groups as $group): ?>
    	<tr>
    		<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
    		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
    		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
    		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
    		<td class="actions">
    			<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
    			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
    		</td>
    	</tr>
        <?php endforeach; ?>
	</table>
	<p>
        <?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
    </p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
    <br />
    <table>
        <td class="actions"><?php echo $this->Html->link(__('New Group'), array('action' => 'add'));?></td>        
    </table>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Management'), array('controller' => 'users', 'action' => 'manage'));?></div>
</div>
