<div class="aerSearches view">
<h2><?php  echo __('Aer Search');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regular'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['regular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Value'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['post_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aer Search'), array('action' => 'edit', $aerSearch['AerSearch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aer Search'), array('action' => 'delete', $aerSearch['AerSearch']['id']), null, __('Are you sure you want to delete # %s?', $aerSearch['AerSearch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aer Searches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aer Search'), array('action' => 'add')); ?> </li>
	</ul>
</div>
