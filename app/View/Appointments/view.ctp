<div class="appointments view">
    <h2><?php  echo __('Appointment');?></h2>
	<dl>
		<dt><?php echo __('Id');?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['id']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patient Name:');?></dt>
		<dd>
			<?php echo h($appointment['Patient']['name']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appointment With:');?></dt>
		<dd>
			<?php echo h($appointment['User']['name']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scheduled By:');?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['scheduled_by']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description:');?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['description']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time:');?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['start_time']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time:');?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['end_time']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes:');?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['notes']);?>
			&nbsp;
		</dd>
	</dl>
</div>
