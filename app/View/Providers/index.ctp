<div class="providers index">
	<h2><?php echo __('Insurance');?></h2>
	<table cellpadding="0" cellspacing="0">
    	<tr>
            <th><?php echo $this->Paginator->sort('Patient.primary', 'Primary');?></th>
            <th><?php echo $this->Paginator->sort('company');?></th>
            <th><?php echo $this->Paginator->sort('group_number', 'Group #');?></th>
            <th><?php echo $this->Paginator->sort('subscriber');?></th>
            <th><?php echo $this->Paginator->sort('id_number', 'ID #');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
    	</tr>
    	<?php
    	$i = 0;
    	foreach ($providers as $provider):?>
    	<tr>
            <td><?php echo h($provider['Patient']['primary'] == $provider['Provider']['id'] ? 'yes' : 'no');?>&nbsp;</td>
    		<td><?php echo h($provider['Provider']['company']);?>&nbsp;</td>
    		<td><?php echo h($provider['Provider']['group_number']);?>&nbsp;</td>
    		<td><?php echo h($provider['Provider']['subscriber']);?>&nbsp;</td>
    		<td><?php echo h($provider['Provider']['id_number']);?>&nbsp;</td>
    		<td class="actions">
    			<?php echo $this->Html->link(__('View'), array('action' => 'view', $provider['Provider']['id']));?>
    			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $provider['Provider']['id']));?>
    			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $provider['Provider']['id']), null, __('Are you sure you want to delete # %s?', $provider['Provider']['id']));?>
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
        <td class="actions"><?php echo $this->Html->link(__('New Insurance'), array('action' => 'add'));?></td>        
    </table>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Patients'), array('controller' => 'patients', 'action' => 'index'));?></div>
</div>
