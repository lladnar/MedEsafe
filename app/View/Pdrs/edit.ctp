<div class="pdrs form">
    <?php echo $this->Form->create('Pdr');?>
    <h2><?php echo __('Edit PDR Website URL');?></h2>
	<fieldset>		
	<?php
		echo $this->Form->input('url', array('label' => 'PDR website URL:'));
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Management'), array('controller' => 'users', 'action' => 'manage'));?></div>
</div>
