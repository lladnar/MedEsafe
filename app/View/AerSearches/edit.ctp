<div class="aerSearches index">
	<h2><?php echo __('Manage AER Search');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>			
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('regular');?></th>
			<th><?php echo $this->Paginator->sort('post_value');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($aerSearches as $aerSearch):?>
	<tr>		
		<td><?php echo h($aerSearch['AerSearch']['name']);?>&nbsp;</td>
		<td><?php echo $this->Form->checkbox('active', array('label' => ''));?>&nbsp;</td>
		<td><?php echo $this->Form->input('url', array('label' => ''));?>&nbsp;</td>
		<td><?php echo $this->Form->input('regular', array('label' => ''));?>&nbsp;</td>
		<td><?php echo $this->Form->input('post_value', array('label' => ''));?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aerSearch['AerSearch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aerSearch['AerSearch']['id'])); ?>
			<?php if ($aerSearch['AerSearch']['id'] > 8){
                  			 			 echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aerSearch['AerSearch']['id']), null, __('Are you sure you want to delete # %s?', $aerSearch['AerSearch']['id']));} ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <br />
    <?php //MAKE RESTORE DEFAULTS BUTTON ?>
    <div align="center"><?php echo $this->Form->end(__('Submit'));?></div>
        <br />
    </div>
    <br />    
    <div class="aerSearches index" align="right">
    <?php
        echo $this->Html->link(__('Back to Management'), array('controller' => 'users', 'action' => 'manage'));
    ?>
    </div>
</div>
