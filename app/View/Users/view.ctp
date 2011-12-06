<div class="users view">
    <h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id');?></dt>
		<dd>
			<?php echo h($user['User']['id']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username');?></dt>
		<dd>
			<?php echo h($user['User']['username']);?>
			&nbsp;
		</dd>
        <dt><?php echo __('Active');?></dt>
		<dd>
			<?php echo h($user['User']['active']) == 1 ? 'yes' : 'no';?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name');?></dt>
		<dd>
			<?php echo h($user['User']['first_name']) . ' ' .
                       h($user['User']['last_name']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group');?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']));?>
			&nbsp;
		</dd>
        <dt><?php echo __('Email');?></dt>
		<dd>
			<?php echo h($user['User']['email']);?>
			&nbsp;
            <dt><?php echo __('DEA #');?></dt>
		<dd>
			<?php echo h($user['User']['dea']);?>
			&nbsp;
		<dt><?php echo __('Created');?></dt>
		<dd>
			<?php echo h($user['User']['created']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deactivated');?></dt>
		<dd>
			<?php echo h($user['User']['deactivated']);?>
			&nbsp;
		</dd>
	</dl>
    <br />
    <table>
        <td class="actions"><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']));?></td>      
    </table>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Users'), array('action' => 'index'));?></div>
</div>
