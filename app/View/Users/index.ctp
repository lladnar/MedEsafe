<div class="users index">
	<h2><?php echo __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
    	<tr>
            <th><?php echo $this->Paginator->sort('username');?></th>
            <th><?php echo $this->Paginator->sort('active');?></th>
            <th><?php echo $this->Paginator->sort('first_name');?></th>
            <th><?php echo $this->Paginator->sort('last_name');?></th>
            <th><?php echo $this->Paginator->sort('group_id');?></th>
            <th><?php echo $this->Paginator->sort('email', 'Email Address');?></th>
            <th><?php echo $this->Paginator->sort('dea', 'DEA #');?></th>
            <th><?php echo $this->Paginator->sort('created');?></th>
            <th><?php echo $this->Paginator->sort('deactivated');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
    	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):?>
	<tr>
		<td><?php echo h($user['User']['username']);?>&nbsp;</td>
        <td><?php echo h($user['User']['active']) == 1 ? 'yes' : 'no';?>&nbsp;</td>
        <td><?php echo h($user['User']['first_name']);?>&nbsp;</td>
        <td><?php echo h($user['User']['last_name']);?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']));?>
		</td>
        <td><?php echo h($user['User']['email']);?>&nbsp;</td>
        <td><?php echo h($user['User']['dea']);?>&nbsp;</td>
		<td><?php echo h($user['User']['created']);?>&nbsp;</td>
		<td><?php echo h($user['User']['deactivated']);?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']));?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']));?>
		</td>
	</tr>
    <?php endforeach;?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
    </p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
    <table>
        <td class="actions"><?php echo $this->Html->link(__('New User'), array('action' => 'add'));?></td>        
    </table>
    
    <div align="right"><?php echo $this->Html->link(__('Back to Management'), array('action' => 'manage'));?></div>
</div>
