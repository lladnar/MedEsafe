<div class="users form">
    <h2><?php echo __('Add User');?></h2>
    <?php echo $this->Form->create('User');?>	
    <fieldset>		
	<?php
		echo $this->Form->input('username');
        echo $this->Form->input('active', array(
            'checked' => 'true'));
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('group_id', array(
            'empty' => ''
            ));
        echo $this->Form->input('email', array('type' => 'email'));
        echo $this->Form->input('dea', array('label' => 'DEA #'));
		echo $this->Form->input('password');
        echo $this->Form->input('confirm_password', array(
            'type'=>'password'));		
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right">
        <?php echo $this->Html->link(__('Back to Users'), array('action' => 'index'));?>
    </div>
</div>
