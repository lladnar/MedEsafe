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
<div class="patients form">
	<h2><?php echo __('Edit Patient');?></h2>
	               
    <div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">Details</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-2">Notes</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-3">Emergency Contact</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-4">Insurance</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-5">Appointments</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#tabs-6">Encounters</a></li>
        </ul>
             
        <div id="tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
            <fieldset>
            <?php
                echo $this->Form->create('Patient');       
                echo $this->Form->input('active');
                echo $this->Form->input('first_name', array(
                    'label' => 'First Name:'
                ));
                echo $this->Form->input('middle_name', array(
                    'label' => 'Middle Name:'
                ));
                echo $this->Form->input('last_name', array(
                    'label' => 'Last Name:'
                ));
                echo $this->Form->input('dob', array(
                    'label' => 'Date of Birth:',
                    'default' => '',
                    'empty' => '',
                    'minYear' => date('Y') - 125,
                    'maxYear' => date('Y') - 0
                ));
                echo $this->Form->input('ssn', array(
                    'label' => 'SSN:'
                ));
                echo $this->Form->input('gender', array(
                    'label' => 'Gender:',
                    'empty' => '',
                    'options' => array(
                        'male' => 'male', 
                        'female' => 'female'
                    )
                ));
                echo $this->Form->input('marital_status', array(
                    'label' => 'Marital Status:',
                    'empty' => '',
                    'options' => array(
                        'single' => 'single', 
                        'married' => 'married',
                        'divorced' => 'divorced',
                        'widowed' => 'widowed'
                    )
                ));
                echo $this->Form->input('home_phone', array(
                    'label' => 'Home Phone #:'
                ));
                echo $this->Form->input('cell_phone', array(
                    'label' => 'Cell Phone #:'
                ));
                echo $this->Form->input('work_phone', array(
                    'label' => 'Work Phone #:'
                ));
                echo $this->Form->input('fax', array(
                    'label' => 'Fax #:'
                ));
                echo $this->Form->input('address', array(
                    'label' => 'Home Address:',
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
                echo $this->Form->input('work_address', array(
                    'label' => 'Work Address:',
                    'type' => 'textarea',
                    'rows' => '2'
                ));
                echo $this->Form->input('work_city', array(
                    'label' => 'City:'
                ));
                echo $this->Form->input('work_state', array(
                    'label' => 'State:', 
                    'empty' => '', 
                    'options' => $states
                ));
                echo $this->Form->input('work_zip', array(
                    'label' => 'Zip:'
                ));
                echo $this->Form->input('email', array(
                    'label' => 'Email Address:',
                    'type' => 'email'
                ));
            ?>
            <br />
            <b><u>Reminder:</u></b> Please attach a scanned copy of the HIPAA Release of Information form and any other signed consents to this record by clicking the Attachments tab and uploading the revelant documents.
            </fieldset>
        </div>      
            
        <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <fieldset>
            <?php
                echo $this->Form->input('notes', array(
                    'label' => false,
                    'type' => 'textarea',
                    'rows' => '10'
                ));
            ?>
            </fieldset>
        </div>
        
    	<div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <fieldset>
            <?php
                echo $this->Form->input('contact_first', array(
                    'label' => 'First Name:'
                ));
                echo $this->Form->input('contact_last', array(
                    'label' => 'Last Name:'
                ));
                echo $this->Form->input('relationship', array(
                    'label' => 'Relationship to Patient:',
                    'empty' => '',
                    'options' => array(
                        'mother' => 'mother', 
                        'father' => 'father',
                        'wife' => 'wife',
                        'husband' => 'husband',
                        'child' => 'child',
                        'sibling' => 'sibling',
                        'other' => 'other'
                    )
                ));
                echo $this->Form->input('contact_home', array(
                    'label' => 'Home Phone #:',
                ));
                echo $this->Form->input('contact_cell', array(
                    'label' => 'Cell Phone #:',
                ));
                echo $this->Form->input('contact_work', array(
                    'label' => 'Work Phone #:',
                ));
                echo $this->Form->input('contact_address', array(
                    'label' => 'Address:',
                ));
                echo $this->Form->input('contact_city', array(
                    'label' => 'City:',
                ));
                echo $this->Form->input('contact_state', array(
                    'label' => 'State:', 
                    'empty' => '', 
                    'options' => $states
                ));
                echo $this->Form->input('contact_zip', array(
                    'label' => 'Zip:',
                ));
                echo $this->Form->input('contact_email', array(
                    'label' => 'Email Address:',
                    'type' => 'email'
                ));
            ?>
            </fieldset>	
        </div>
        
        <div id="tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <fieldset>
    		<?php
                if (!empty($patient['Provider'])):
            ?>
        	<table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Primary');?></th>
                <th><?php echo __('Company');?></th>
                <th><?php echo __('Group #');?></th>
                <th><?php echo __('Subscriber');?></th>
                <th><?php echo __('Id #');?></th>
                <th class="actions"><?php echo __('Actions');?></th>
            </tr>
        	<?php
        		$i = 0;
        		foreach ($patient['Provider'] as $provider):
            ?>
    		<tr>
       			<td><?php echo h($patient['Patient']['primary'] == $provider['id'] ? 'yes' : 'no');?>&nbsp;</td>
        		<td><?php echo h($provider['company']);?>&nbsp;</td>
        		<td><?php echo h($provider['group_number']);?>&nbsp;</td>
        		<td><?php echo h($provider['subscriber']);?>&nbsp;</td>
        		<td><?php echo h($provider['id_number']);?>&nbsp;</td>
       			<td class="actions">
                    <?php echo $this->Html->link(__('View'), array('controller' => 'providers', 'action' => 'view', $provider['id']));?>
                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'providers', 'action' => 'edit', $provider['id']));?>
                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'providers', 'action' => 'delete', $provider['id']), null, __('Are you sure you want to delete this provider?'));?>
       			</td>
    		</tr>
        	<?php 
                endforeach;
            ?>
        	</table>
            <?php 
                endif;
            ?>
            <br />
        	<table>
      			<td class="actions"><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add'));?></td>
       		</table>
        </div>
        
        <div id="tabs-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <?php
                if (!empty($patient['Appointment'])):
            ?>
            <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Start Time');?></th>
    			<th><?php echo __('End Time');?></th>
    			<th><?php echo __('Patient Name');?></th>
    			<th><?php echo __('Appointment With');?></th>
    			<th><?php echo __('Scheduled By');?></th>
    			<th><?php echo __('Description');?></th>
    			<th><?php echo __('Notes');?></th>
    			<th class="actions"><?php echo __('Actions');?></th>
            </tr>
        	<?php
            	$i = 0;
            	foreach ($patient['Appointment'] as $appointment):
            ?>
            <tr>
        		<td><?php echo h($appointment['start_time']); ?>&nbsp;</td>
        		<td><?php echo h($appointment['end_time']); ?>&nbsp;</td>
        		<td><?php echo h($patient['Patient']['name']); ?>&nbsp;</td>
        		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
        		<td><?php echo h($appointment['scheduled_by']); ?>&nbsp;</td>
        		<td><?php echo h($appointment['description']); ?>&nbsp;</td>
        		<td><?php echo h($appointment['notes']); ?>&nbsp;</td>
        		<td class="actions">
        			<?php echo $this->Html->link(__('View'), array('controller' => 'appointments', 'action' => 'view', $appointment['id'])); ?>
        			<?php echo $this->Html->link(__('Edit'), array('controller' => 'appointments', 'action' => 'edit', $appointment['id'])); ?>
        			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'appointments', 'action' => 'delete', $appointment['id']), null, __('Are you sure you want to delete this appointment?')); ?>
        		</td>
            </tr>
            <?php 
                endforeach; 
            ?>
        	</table>
            <?php 
                endif;
            ?>
            <br />
            <table>
                <td class="actions"><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add'));?></td>        
            </table>
        </div>
        
        <div id="tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
            <?php
                if (!empty($patient['Encounter'])):
            ?>
        	<table cellpadding="0" cellspacing="0">
        	<tr>
                <th><?php echo __('Encounter Type');?></th>
                <th><?php echo __('Patient');?></th>
                <th><?php echo __('Date & Time');?></th>
                <th><?php echo __('Encounter with');?></th>
                <th class="actions"><?php echo __('Actions');?></th>
        	</tr>
        	<?php
            	$i = 0;
            	foreach ($patient['Encounter'] as $encounter):
            ?>
        	<tr>
        		<td>
        			<?php echo $this->Html->link($encounterType['EncounterType']['name'], array('controller' => 'encounter_types', 'action' => 'view', $encounterType['EncounterType']['id']));?>
        		</td>
        		<td>
        			<?php echo $this->Html->link($patient['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $patient['Patient']['id']));?>
        		</td>
        		<td><?php echo h($encounter['date_time']);?>&nbsp;</td>
        		<td>
        			<?php echo $this->Html->link($user['User']['name'], array('controller' => 'users', 'action' => 'view', $user['User']['id']));?>
        		</td>
        		<td class="actions">
        			<?php echo $this->Html->link(__('View'), array('controller' => 'encounters', 'action' => 'view', $encounter['id']));?>
        			<?php echo $this->Html->link(__('Edit'), array('controller' => 'encounters', 'action' => 'edit', $encounter['id']));?>
        			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'encounters', 'action' => 'delete', $encounter['id']), null, __('Are you sure you want to delete this encounter?'));?>
        		</td>
        	</tr>
            <?php 
                endforeach;
            ?>
        	</table>
            <?php 
                endif;
            ?>
            <br />
            <table>
                <td class="actions"><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add'));?></td>        
            </table>
        </div>

        
        
        <div align="center"><?php echo $this->Form->end(__('Submit'));?></div>
        <br />
    </div>
    <br />
    <div align="right"><?php echo $this->Html->link(__('Back to Patients'), array('action' => 'index'));?></div>
</div>
