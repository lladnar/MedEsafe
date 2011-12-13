<?php
    $days = array('options' => array(
            'Sunday' => 'Sunday',
            'Monday' => 'Monday',
            'Tuesday' => 'Tuesday',
            'Wednesday' => 'Wednesday', 
            'Thursday' => 'Thursday',
            'Friday' => 'Friday',
            'Saturday' => 'Saturday'           
    ));
?>
<div class="settings form">
    <h2><?php  echo __('Calendar Settings');?></h2>
    <?php echo $this->Form->create('Setting');?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id', array(
            'label' => 'Custodian:',
            'empty' => ''
            ));
		echo $this->Form->input('Setting.week_start', $days, array('label' => 'Work Week Start:'));
		echo $this->Form->input('Setting.week_end', $days, array('label' => 'Work Week End:'));
		echo $this->Form->input('day_start', array(
            'label' => 'Work Day Start:',
            'interval' => 30
        ));
		echo $this->Form->input('day_end', array(
            'label' => 'Work Day End:',
            'interval' => 30
        ));
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Management'), array('controller' => 'users', 'action' => 'manage'));?></div>
</div>
