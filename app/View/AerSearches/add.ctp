<div class="aerSearches form">
<?php echo $this->Form->create('AerSearch');?>
    <h2><?php echo __('Add AER Search');?></h2>
    
    <fieldset>
	<?php
		echo $this->Form->input('name', array('label' => 'Name:'));
		echo $this->Form->input('active', array(
              'checked' => 'true'));
		echo $this->Form->input('url', array('label' => 'URL:'));
		echo $this->Form->input('expression', array('label' => 'Regular Expression:'));
		echo $this->Form->input('pairs', array('label' => 'POST Name/Value Pairs:'));
	?>
	</fieldset>
    
    <div align="center"><?php echo $this->Form->end(__('Submit'));?></div>
        <br />
    </div>
    <br />    
    <div class="aerSearches index" align="right">
    <?php
        echo $this->Html->link(__('Back to AER Searches'), array('action' => 'index'));
    ?>
</div>
