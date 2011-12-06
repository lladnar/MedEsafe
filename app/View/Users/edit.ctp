<div class="users form">
    <?php echo $this->Form->create('User');?>	
    <fieldset>
        <h2><?php echo __('Edit User');?></h2><br />		
	<?php
		echo $this->Form->input('username');
        echo $this->Form->input('active');
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('group_id', array(
            'empty' => ''
            ));
        echo $this->Form->input('email', array('type' => 'email'));
        echo $this->Form->input('dea', array('label' => 'DEA #'));
		echo $this->Form->input('User.password');
        echo $this->Form->input('confirm');
		
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right">
        <?php echo $this->Html->link(__('Back to Users'), array('action' => 'index'));?>
    </div>
</div>
