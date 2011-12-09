<?php echo $this->Html->css('jquery-ui-1.8.16.custom', null, array('inline' => false));?>
<?php
    $states = array('options' => array(
        'AK' => 'AK', 'AL' => 'AL', 'AR' => 'AR', 'AZ' => 'AZ', 'CA' => 'CA', 
        'CO' => 'CO', 'CT' => 'CT', 'DC' => 'DC', 'DE' => 'DE', 'FL' => 'FL', 
        'GA' => 'GA', 'HI' => 'HI', 'IA' => 'IA', 'ID' => 'ID', 'IL' => 'IL', 
        'IN' => 'IN', 'KS' => 'KS', 'KY' => 'KY', 'LA' => 'LA', 'MA' => 'MA', 
        'MD' => 'MD', 'ME' => 'ME', 'MI' => 'MI', 'MN' => 'MN', 'MO' => 'MO', 
        'MS' => 'MS', 'MT' => 'MT', 'NC' => 'NC', 'ND' => 'ND', 'NE' => 'NE', 
        'NH' => 'NH', 'NJ' => 'NJ', 'NM' => 'NM', 'NV' => 'NV', 'NY' => 'NY', 
        'OH' => 'OH', 'OK' => 'OK', 'OR' => 'OR', 'PA' => 'PA', 'RI' => 'RI', 
        'SC' => 'SC', 'SD' => 'SD', 'TN' => 'TN', 'TX' => 'TX', 'UT' => 'UT', 
        'VA' => 'VA', 'VT' => 'VT', 'WA' => 'WA', 'WI' => 'WI', 'WV' => 'WV', 
        'WY' => 'WY'), 'empty' => ''
    );
?>
<div class="patients index">
	<h2><?php echo __('Edit Patient');?></h2>
	               
    <div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">Details</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-2">Notes</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-3">Emergency Contact</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-4">Insurance</a></li>
        </ul>
             
        <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
            <fieldset>
            <?php echo $this->Form->create('Patient');       
        	 	  echo $this->Form->input('active');
        		  echo $this->Form->input('first_name');
                  echo $this->Form->input('middle_name');
                  echo $this->Form->input('last_name');
        		  echo $this->Form->input('date_of_birth', array(
                        'default' => '',
                        'minYear' => date('Y') - 125,
                        'maxYear' => date('Y') - 0,
                        'empty' => ''));
        		  echo $this->Form->input('social_security');
                  echo $this->Form->input('Patient.gender', array(
                        'options' => array(
                            'male' => 'male', 
                            'female' => 'female'), 
                            'empty' => ''));
                  echo $this->Form->input('Patient.marital_status', array(
                        'options' => array(
                            'single' => 'single', 
                            'married' => 'married',
                            'divorced' => 'divorced',
                            'widowed' => 'widowed'),
                            'empty' => ''));
                  echo $this->Form->input('home_phone');
                  echo $this->Form->input('cell_phone');
                  echo $this->Form->input('work_phone');
                  echo $this->Form->input('fax');
                  echo $this->Form->input('home_address');
                  echo $this->Form->input('home_address_2');
                  echo $this->Form->input('home_city');
                  echo $this->Form->input('Patient.home_state', $states);        
                  echo $this->Form->input('home_zip');
                  echo $this->Form->input('work_address');
                  echo $this->Form->input('work_address_2');
                  echo $this->Form->input('work_city');
                  echo $this->Form->input('Patient.work_state', $states);
                  echo $this->Form->input('work_zip');
                  echo $this->Form->input('email', array('type' => 'email'));
            ?>
            <br />
            <b><u>Reminder:</u></b> Please attach a scanned copy of the HIPAA Release of Information form and any other signed consents to this record by clicking the Attachments tab and uploading the revelant documents.
            </fieldset>
        </div>      
            
        <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <fieldset>
            <?php echo $this->Form->textarea('notes', array('rows' => '10'));?>
            </fieldset>
        </div>
        
    	<div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <fieldset>
            <?php echo $this->Form->input('contact_first_name');
                  echo $this->Form->input('contact_last_name');
                  echo $this->Form->input('Patient.contact_relationship', array(
                        'options' => array(
                            'mother' => 'mother', 
                            'father' => 'father',
                            'wife' => 'wife',
                            'husband' => 'husband',
                            'child' => 'child',
                            'sibling' => 'sibling',
                            'other' => 'other'),
                            'empty' => ''));
                  echo $this->Form->input('contact_home_phone');
                  echo $this->Form->input('contact_cell_phone');
                  echo $this->Form->input('contact_work_phone');
                  echo $this->Form->input('contact_address');
                  echo $this->Form->input('contact_address 2');
                  echo $this->Form->input('contact_city');
                  echo $this->Form->input('Patient.contact_state', $states);
                  echo $this->Form->input('contact_zip');
                  echo $this->Form->input('contact_email', array('type' => 'email'));
            ?>
            </fieldset>	
        </div>
        
        <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <fieldset>
            <?php echo $this->Form->input('Provider.primary');
                  echo $this->Form->input('Provider.insurance_company');
                  echo $this->Form->input('Provider.group_number');
                  echo $this->Form->input('Provider.id_number');
                  echo $this->Form->input('Provider.subscriber');
                  echo $this->Form->input('Provider.subscriber_relationship', array(
                        'options' => array(
                            'self' => 'self',
                            'mother' => 'mother', 
                            'father' => 'father',
                            'wife' => 'wife',
                            'husband' => 'husband',
                            'child' => 'child',
                            'sibling' => 'sibling',
                            'other' => 'other'),
                            'empty' => ''));              
                  echo $this->Form->input('Provider.subscriber_dob', array(
                        'default' => '',
                        'minYear' => date('Y') - 125,
                        'maxYear' => date('Y') - 18,
                        'empty' => ''));
                  echo $this->Form->input('Provider.subscriber_ssn');
                  echo $this->Form->input('Provider.subscriber_address');
                  echo $this->Form->input('Provider.subscriber_address 2');
                  echo $this->Form->input('Provider.subscriber_city');
                  echo $this->Form->input('Provider.subscriber_state', $states);
                  echo $this->Form->input('Provider.subscriber_zip');
            ?>
            </fieldset>	
        </div>
                
        <div align="center"><?php echo $this->Form->end(__('Submit'));?></div>
        <br />
    </div>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Patients'), array('action' => 'index'));?></div>
</div>
