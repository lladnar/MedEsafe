<div class="patients view">
<h2><?php  echo __('Patient');?></h2>
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
			<?php echo h($patient['Patient']['date_of_birth']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('SSN');?></dt>
		<dd>
			<?php echo h($patient['Patient']['social_security']);?>
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
			<?php echo h($patient['Patient']['home_address']) . ' ' . 
                       h($patient['Patient']['home_address_2']);?>                       
			&nbsp;
		</dd>
        <dt><?php echo __('City State Zip');?></dt>
		<dd>
            <?php echo  h($patient['Patient']['home_city']) . ' ' . 
                        h($patient['Patient']['home_state']) . ' ' . 
                        h($patient['Patient']['home_zip']);?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Address');?></dt>
		<dd>
			<?php echo h($patient['Patient']['work_address']) . ' ' . 
                       h($patient['Patient']['work_address_2']);?>                       
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
</div>

<div class="actions">
	<ul>
        <b>Page Options:</b><br /><br />
		<li><?php echo $this->Html->link(__('Edit Patient'), array('action' => 'edit', $patient['Patient']['id']));?> </li>
		<li><?php echo $this->Html->link(__('Export HL7'), array('controller' => 'patients', 'action' => 'export_hl7'));?></li>
		<li><?php echo $this->Html->link(__('Export Word'), array('controller' => 'patients', 'action' => 'export_word'));?> </li>        
    </ul>
</div>