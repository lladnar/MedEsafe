<h2><?php echo __('MedEsafe Login');?></h2>
<?php
    echo $this->Form->create('User', array('action' => 'login'));
    echo $this->Form->inputs(array(
            'legend' => '',
            'username',
            'password'
    ));
    echo $this->Form->end('Login');
?>