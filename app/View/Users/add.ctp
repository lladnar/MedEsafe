<div class="users form">
<?php echo $this->Form->create('User');?>	
    <fieldset>
        <h2><?php echo __('Add User');?></h2><br />		
	<?php
		echo $this->Form->input('username');
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('group_id', array(
            'empty' => ''
            ));
        echo $this->Form->input('email');
        echo $this->Form->input(array('dea' => 'DEA#'));
		echo $this->Form->input('password');
        echo $this->Form->input('confirm');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
