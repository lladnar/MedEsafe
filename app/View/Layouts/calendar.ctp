<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
    $cakeDescription = __d('cake_dev', 'MedEsafe');
    $currentUrl = $this->Html->url();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset();?>
	<title>
		<?php echo $cakeDescription?>:
		<?php echo $title_for_layout;?>
	</title>
	<?php
        echo $this->Html->script(array('jquery-1.7.1.min', 'jquery-ui-1.8.16.custom.min', 'fullcalendar.min'));
        echo $this->Html->meta('icon');
		echo $this->Html->css('medesafe.main');
		echo $scripts_for_layout;
	?>
    <script>
		$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
		  
			header: {
				left: 'prev,today,next',
				center: 'title',
				right: 'agendaDay,agendaWeek,month'
			},
            
            defaultView: 'agendaDay',
            minTime: '8:00am',
            maxTime: '6:00pm',
            allDaySlot: false,
            editable: true,
			selectable: true,
			selectHelper: true,
            
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
            
            events: [
				{
					title: 'John Doe - Physical w/Dr. Wintler, per Linda Prak; notes: uses a walker',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
                {
					title: 'Mary Smith - Treatment w/Dr. Schivago, per Dr. Schivago',
					start: new Date(y, m, d, 11),
					allDay: false
				},
				{
					title: 'Clickable Link',
					start: new Date(y, m, d+1, 15),
					end: new Date(y, m, d+1, 16, 30),
                    allDay: false,
					url: 'http://medesafe.net/'
				}
			]
		});		
	});
	</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link('MedEsafe', 'http://medesafe.net');?></h1>            
		</div>
		<div id="content">        
            <?php echo $this->Session->flash();?>
            <?php echo $this->Session->flash('auth');?>
                <h1 align="right"><?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout'));?></h1>            
                <div class="actions">                    
                	<ul>
                		<li><?php echo $this->Html->link(__('Appointments'), array('controller' => 'appointments', 'action' => 'index'));?> </li>
                		<li><?php echo $this->Html->link(__('Patients'), array('controller' => 'patients', 'action' => 'index'));?></li>
                		<li><?php echo $this->Html->link(__('Management'), array('controller' => 'users', 'action' => 'manage'));?> </li>
                        <li><?php echo $this->Html->link(__('AER Search'), array('controller' => 'aer_searches', 'action' => 'search'));?> </li>
                        <li><?php echo $this->Html->link(__('Access PDR'), 'http://' . $pdr['Pdr']['url']);?> </li>
                	</ul>
                </div>
            
			<?php echo $content_for_layout;?>

		</div>
		<div id="footer">
            &#169; 2009-2012 MedEsafe, Inc. All rights reserved.
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				); */
			?>
		</div>
	</div>
    <?php echo $this->Js->writeBuffer(); // Write cached scripts?>
</body>
</html>