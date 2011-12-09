<div class="encounters form">
    <h2><?php echo __('Add Encounter');?></h2>
    <?php echo $this->Form->create('Encounter');?>
	<fieldset>		
	<?php
		echo $this->Form->input('patient_id');
		echo $this->Form->input('encounter_type_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('appointment_id');
		echo $this->Form->input('attachment_id');
		echo $this->Form->input('date_time');
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Encounters'), array('action' => 'index'));?></div>
</div>
