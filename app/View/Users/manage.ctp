<?php echo $this->Html->css ('medesafe.radio');?>

<div class="users view">
    <h2><?php  echo __('Management');?></h2>
    <br />
    <h3>I would like to:</h3>    
    <?php
        echo $this->Form->create('User', array('action' => 'manage'));
        echo $this->Form->radio('radio', array(
            'users' => 'manage User Accounts.',
            'groups' => 'manage Groups.',
            'aer_searches' => 'manage AER search.',
            'pdrs' => 'change PDR website URL.',
            'encounter_types' => 'manage Encounter Types.',
            'lookups' => 'manage Lookups.',
            'settings' => 'edit Calendar Settings.',
            'activity_logs' => 'view Activity Logs.'
        ), array(
            'legend' => false,
            'value' => 'users',
             ));
        echo $this->Form->end('Submit');
    ?>
</div>
