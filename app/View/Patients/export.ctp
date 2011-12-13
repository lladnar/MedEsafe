<?php echo $this->Html->css ('medesafe.radio');?>
<div class="patients form">
	<h2><?php echo __('Export Patient Info');?></h2>
    <fieldset>
        <?php echo 'Patient Name: ' . $patient['Patient']['name'];?>
        <br /><br />
        Output format:
        <br /><br />
    <?php
        echo $this->Form->create('Export', array('action' => 'export'));
        echo $this->Form->radio('format', array(
            'hl7' => 'Save HL7 File to Disk:',
            'word' => 'Save Word File to Disk:',
            'email' => 'Email to: ' . $patient['Patient']['email'],
        ), array(
            'legend' => false,
            'value' => 'hl7',
             ));
    ?>
        <fieldset>
        <?php                         
            echo $this->Form->checkbox('encrypt') . 'Encrypt Zip File';
            echo $this->Form->input('password');
            echo $this->Form->input('confirm_password', array(
                'type'=>'password'
            ));
        ?>
        </fieldset>        
        <br /><br />
        Select Data for Export:
        <br /><br />
    <?php
        echo $this->Form->select('data', array(
            'Patient' => array(
                'details' => 'Details',
                'contact' => 'Emergency Contact',
                'providers' => 'Insurance',
                'attachments' => 'Attachments'),
            'Encounters' => array(
                '1' => 'Patient Contact',
                '2' => 'History and Physical')
        ), array(
            'multiple' => 'checkbox'
        ));
    ?>
    <fieldset/>
    <div align="center"><?php echo $this->Form->end(__('Submit'));?></div>
    <br />
	<h3><b><?php echo __('Under Construction...');?></b></h3>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Patients'), array('action' => 'index'));?></div>
</div>
