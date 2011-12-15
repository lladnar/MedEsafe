<div class="patients index">
	<h2><?php echo __('Patients');?></h2>
	<table cellpadding="0" cellspacing="0">
    
    <?php  
        echo $this->Form->create('Patient', array('action' => 'search')); 
        echo $this->Form->input("q", array('label' => 'Search for'));
        echo $this->Form->end("Search");
        
     /* Dropdown for Active/Inactive/All patient filter
        echo $this->Form->create('Patient', array('action' => 'index'));
        echo $this->Form->input('show', array(
                    'label' => 'Show: ',
                    'options' => array(
                        0 => 'all patients',
                        1 => 'active patients', 
                        2 => 'inactive patients')));
        echo $this->Form->end("View");   */             
    ?>
	<tr>
			<th><?php echo $this->Paginator->sort('id', 'ID');?></th>
            <th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
            <th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('dob', 'DoB');?></th>
			<th><?php echo $this->Paginator->sort('ssn', 'SSN');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
        $i = 0;        
        foreach ($patients as $patient):
  //  $active = $patient['Patient']['active'];
  //  echo 'id: ' . $patient['Patient']['id'] . ', active: ' . $active . ', show: ' . $show;
  //  if (($show == null) || ($show == $active)){
    ?>
	<tr>
        <?php $current_patient = $patient['Patient']['id'];?>
		<td><?php echo h($patient['Patient']['id']);?>&nbsp;</td>
        <td><?php echo h($patient['Patient']['active']) == 1 ? 'yes' : 'no';?>&nbsp;</td>
        <td><?php echo h($patient['Patient']['first_name']);?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['last_name']);?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['dob']);?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['ssn']);?>&nbsp;</td>
		<td class="actions">
            <?php //echo $this->Html->link(__('View'), array('action' => 'view', $patient['Patient']['id']));?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patient['Patient']['id']));?>
			<?php echo $this->Html->link(__('Export'), array('action' => 'export', $patient['Patient']['id']));?>
		</td>
	</tr>
    <?php // }?>
    <?php 
        endforeach;
    ?>
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
    <br />
    <table>
        <td class="actions">
        <?php 
            echo $this->Html->link(__('New Patient'), array('action' => 'add'));
            echo $this->Html->link(__('Import HL7'), array ('action' => 'import'));
        ?>
        </td>     
    </table>
</div>