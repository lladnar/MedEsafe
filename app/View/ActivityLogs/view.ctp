<div class="activityLogs view">
<h2><?php  echo __('Activity Log');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activityLog['ActivityLog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activityLog['User']['name'], array('controller' => 'users', 'action' => 'view', $activityLog['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appointment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activityLog['Appointment']['id'], array('controller' => 'appointments', 'action' => 'view', $activityLog['Appointment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activityLog['Encounter']['id'], array('controller' => 'encounters', 'action' => 'view', $activityLog['Encounter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activityLog['Provider']['id'], array('controller' => 'providers', 'action' => 'view', $activityLog['Provider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo h($activityLog['ActivityLog']['activity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activityLog['ActivityLog']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activity Log'), array('action' => 'edit', $activityLog['ActivityLog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activity Log'), array('action' => 'delete', $activityLog['ActivityLog']['id']), null, __('Are you sure you want to delete # %s?', $activityLog['ActivityLog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
