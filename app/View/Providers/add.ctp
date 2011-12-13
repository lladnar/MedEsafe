<?php
    $states = array(
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
        'WY' => 'WY'
    );
?>
<div class="providers form">
    <h2><?php echo __('Add Insurance');?></h2>
    <?php echo $this->Form->create('Provider');?>
	<fieldset>
	<?php
        echo $this->Form->input('patient_id');
        echo $this->Form->input('primary', array(
            'type' => 'checkbox'
        ));
		echo $this->Form->input('company', array(
            'label' => 'Company:'
        ));
		echo $this->Form->input('group_number', array(
            'label' => 'Group #:'
        ));
		echo $this->Form->input('id_number', array(
            'label' => 'ID #:'
        ));
		echo $this->Form->input('subscriber', array(
            'label' => 'Subscriber:'
        ));
		echo $this->Form->input('relationship', array(
            'label' => 'Relationship to Patient:',
            'empty' => '',
            'options' => array(
                'self' => 'self',
                'mother' => 'mother', 
                'father' => 'father',
                'wife' => 'wife',
                'husband' => 'husband',
                'child' => 'child',
                'sibling' => 'sibling',
                'other' => 'other'
            )
        ));
		echo $this->Form->input('ssn', array(
            'label' => 'SSN:'
        ));
		echo $this->Form->input('dob', array(
            'label' => 'Date of Birth:',
            'default' => '',
            'minYear' => date('Y') - 125,
            'maxYear' => date('Y') - 18,
            'empty' => ''
        ));
		echo $this->Form->input('address', array(
            'label' => 'Address:',
            'type' => 'textarea',
            'rows' => '2'
        ));
		echo $this->Form->input('city', array(
            'label' => 'City:'
        ));
		echo $this->Form->input('state', array(
                    'label' => 'State:', 
                    'empty' => '', 
                    'options' => $states
        ));
		echo $this->Form->input('zip', array(
            'label' => 'Zip:'
        ));
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Insurance'), array('action' => 'index'));?></div>
</div>
