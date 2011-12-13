<div class="encounterTypes form">
    <h2><?php echo __('Add Encounter Type');?></h2>
    <?php echo $this->Form->create('EncounterType');?>
	<fieldset>		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array(
            'label' => 'Name:'));
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Encounter Types'), array('action' => 'index'));?></div>
</div>
