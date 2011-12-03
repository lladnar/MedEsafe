<div class="providers view">
<h2><?php  echo __('Provider');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($provider['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $provider['Patient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance Company'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['insurance_company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Number'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['group_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Number'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['id_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber Name'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber Relationship'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_relationship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber Ssn'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_ssn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber Dob'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber Address'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber City'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber State'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subscriber Zip'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber_zip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provider'), array('action' => 'edit', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provider'), array('action' => 'delete', $provider['Provider']['id']), null, __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
	</ul>
</div>
