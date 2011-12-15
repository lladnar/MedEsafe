<div class="patients view">
    <h2><?php  echo __('Patient: ' . $patient['Patient']['name']);?></h2>
	<dl>
		<dt><?php echo __('Id');?></dt>
		<dd>
			<?php echo h($patient['Patient']['id']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active');?></dt>
		<dd>
			<?php echo h($patient['Patient']['active']) == 1 ? 'yes' : 'no';?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name');?></dt>
		<dd>
			<?php echo h($patient['Patient']['first_name']) . ' ' . 
                       h($patient['Patient']['middle_name']) . ' ' . 
                       h($patient['Patient']['last_name']);?>
			&nbsp;
		</dd>        
		<dt><?php echo __('DoB');?></dt>
		<dd>
			<?php echo h($patient['Patient']['dob']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('SSN');?></dt>
		<dd>
			<?php echo h($patient['Patient']['ssn']);?>
			&nbsp;
		</dd>
        <dt><?php echo __('Gender');?></dt>
		<dd>
			<?php echo h($patient['Patient']['gender']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status');?></dt>
		<dd>
			<?php echo h($patient['Patient']['marital_status']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone');?></dt>
		<dd>
			<?php echo h($patient['Patient']['home_phone']);?>
			&nbsp;
		</dd>
        <dt><?php echo __('Cell Phone');?></dt>
		<dd>
        	<?php echo h($patient['Patient']['cell_phone']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Phone');?></dt>
		<dd>
			<?php echo h($patient['Patient']['work_phone']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax');?></dt>
		<dd>
			<?php echo h($patient['Patient']['fax']);?>
			&nbsp;
		</dd>
        <dt><?php echo __('Home Address');?></dt>
		<dd>
			<?php echo h($patient['Patient']['address']);?>                       
			&nbsp;
		</dd>
        <dt><?php echo __('City State Zip');?></dt>
		<dd>
            <?php echo  h($patient['Patient']['city']) . ' ' . 
                        h($patient['Patient']['state']) . ' ' . 
                        h($patient['Patient']['zip']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Address');?></dt>
		<dd>
			<?php echo h($patient['Patient']['work_address']);?>                       
			&nbsp;
		</dd>
        <dt><?php echo __('City State Zip');?></dt>
		<dd>
            <?php echo  h($patient['Patient']['work_city']) . ' ' . 
                        h($patient['Patient']['work_state']) . ' ' . 
                        h($patient['Patient']['work_zip']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email');?></dt>
		<dd>
			<?php echo h($patient['Patient']['email']);?>
			&nbsp;
		</dd>
        <dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Name'); ?></dt>
        <dd>
			<?php echo h($patient['Patient']['contact_first']) . ' ' . 
                       h($patient['Patient']['contact_last']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship with Patient'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['relationship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Home Phone'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['contact_home']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Cell Phone'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['contact_cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Work Phone'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['contact_work']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Contact Address');?></dt>
		<dd>
			<?php echo h($patient['Patient']['contact_address']);?>                       
			&nbsp;
		</dd>
        <dt><?php echo __('City State Zip');?></dt>
		<dd>
            <?php echo  h($patient['Patient']['contact_city']) . ' ' . 
                        h($patient['Patient']['contact_state']) . ' ' . 
                        h($patient['Patient']['contact_zip']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Email'); ?></dt>
		<dd>
			<?php echo h($patient['Patient']['contact_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created');?></dt>
		<dd>
			<?php echo h($patient['Patient']['created']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified');?></dt>
		<dd>
			<?php echo h($patient['Patient']['modified']);?>
			&nbsp;
		</dd>
        <dt><?php echo __('Next Appointment:');?></dt>
		<dd>
			No appointments found. <?php //echo h($patient['Appointment']['next']);?>
			&nbsp;
		</dd>
	</dl>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Patients'), array('action' => 'index'));?></div>
</div>
