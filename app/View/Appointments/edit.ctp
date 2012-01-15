<div class="appointments form">
    <?php echo $this->Form->create('Appointment');?>
        <h2><?php echo __('Edit Appointment');?></h2>
	<fieldset>
		
	<?php
		echo $this->Form->input('Patient.name', array(
            'label' => 'Patient Name:',
            'readonly'
            ));
        echo $this->Form->input('user_id', array(
            'label' => 'Appointment With:',
            'empty' => ''
            )); 		
        echo $this->Form->input('scheduled_by', array(
            'label' => 'Revised By:',
            'value' => $current_user['name'],
            'readonly'           
            ));
		echo $this->Form->input('description', array(
            'label' => 'Description:'
            ));
		echo $this->Form->input('start_time', array(
            'label' => 'Start Time:',
            'interval' => 30
            ));
		echo $this->Form->input('end_time', array(
            'label' => 'End Time:',
            'interval' => 30
            ));
		echo $this->Form->input('notes', array(
            'label' => 'Notes:'
            ));
	?>
	</fieldset>
    
    <div align="center"><?php echo $this->Form->end(__('Submit'));?></div>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Appointments'), array('action' => 'index'));?></div>
</div>
