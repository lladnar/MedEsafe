<div class="settings view">
<h2><?php  echo __('Setting');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($setting['User']['last_name'], array('controller' => 'users', 'action' => 'view', $setting['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week Start'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['week_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week End'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['week_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day Start'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['day_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day End'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['day_end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Setting'), array('action' => 'edit', $setting['Setting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Setting'), array('action' => 'delete', $setting['Setting']['id']), null, __('Are you sure you want to delete # %s?', $setting['Setting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
