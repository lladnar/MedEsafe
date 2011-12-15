<div class="encounters form">
    <h2><?php echo __('Add Encounter');?></h2>
    <?php echo $this->Form->create('Encounter');?>
	<fieldset>		
	<?php
//needs to be a hidden form w/current patient's id entered.
		echo $this->Form->input('patient_id', array(
            'label' => 'Patient Name:',
            'empty' => ''
            ));
		echo $this->Form->input('encounter_type_id', array(
            'label' => 'Encounter Type:',
            'empty' => ''
            ));
		echo $this->Form->input('user_id', array(
            'label' => 'Encounter With:',
            'empty' => ''
            ));
		echo $this->Form->input('appointment_id', array(
            'label' => 'Appointment:',
//null value not allowed here. also, needs to show only appts. of current patient.
//            'empty' => ''
            ));
		echo $this->Form->input('date_time', array(
            'label' => 'Date & Time:',
            'interval' => 30
            ));
        echo $this->Form->input('attachment_id');
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
	<h3><b><?php echo __('Under Construction...');?></b></h3>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Encounters'), array('action' => 'index'));?></div>
</div>
