<div class="aerSearches view">
<h2><?php  echo __('AER Search');?></h2>
	<dl>
		<dt><?php echo __('ID:');?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['id']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name:'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['name']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active:'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['active']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('URL:');?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['url']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regular Expression:'); ?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['expression']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('POST Name/Value Pairs:');?></dt>
		<dd>
			<?php echo h($aerSearch['AerSearch']['pairs']);?>
			&nbsp;
		</dd>
	</dl>
</div>
