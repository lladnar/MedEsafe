<div class="providers view">
<h2><?php  echo __('Insurance Provider');?></h2>
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
		<dt><?php echo __('Primary'); ?></dt>
		<dd>
			<?php echo h($provider['Patient']['primary'] == $provider['Provider']['id'] ? 'yes' : 'no'); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['company']); ?>
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
		<dt><?php echo __('Subscriber'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['subscriber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship to Patient'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['relationship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SSN'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['ssn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DoB'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['zip']); ?>
			&nbsp;
		</dd>
	</dl>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Insurance'), array('action' => 'index'));?></div>
</div>
