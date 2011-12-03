<div class="patients index">
    <h2><?php echo __('Import HL7');?></h2><br /><br /><br />
    <h3>Select a file to import:</h3>
    
	<?php echo $this->Form->create('Patient', array('type' => 'file'));?>
    <?php echo $this->Form->file('import_file');?>
    <?php echo $this->Form->end();?>
</div>
