<div class="users view">
    <h2><?php  echo __('Management');?></h2>
    <br />
    <h3>I would like to:</h3>
    
    <?php /* RADIO BUTTON VERSION:
        echo $this->Form->create('User', array('action' => 'manage'));
        echo $this->Form->radio('menu', array(
             'users' => 'manage User Accounts.',
             'groups' => 'manage Groups.',
             'aer_search' => 'manage AER search.',
             'access_pdr' => 'manage PDR Website.',
             'encounter_types' => 'manage Enounter Types.',
             'lookups' => 'manage Lookups.',
             'calendar_settings' => 'manage Calendar Settings.',
             'activity_logs' => 'view Activity Logs.'),
             array('legend' => false));?>
    <br /><br /><br />Make a selection above and click the "Submit" button.<br />
    <?php         
        echo $this->Form->end('Submit');    */
    ?>
	
    <?php echo $this->Html->link(__('manage User Accounts.'), array('action' => 'index'));?>
    <br /><br />
    <?php echo $this->Html->link(__('manage Groups.'), array('controller' => 'groups', 'action' => 'index'));?>
    <br /><br />
    <?php echo $this->Html->link(__('manage AER search.'), array('controller' => 'aer_searches', 'action' => 'edit/1'));?>
    <br /><br />
    <?php echo $this->Html->link(__('manage PDR Website.'), array('action' => 'index'));?>
    <br /><br />
    <?php echo $this->Html->link(__('manage Enounter Types.'), array('action' => 'index'));?>
    <br /><br />
    <?php echo $this->Html->link(__('manage Lookups.'), array('action' => 'index'));?>
    <br /><br />
    <?php echo $this->Html->link(__('manage Calendar Settings.'), array('action' => 'index'));?>
    <br /><br />
    <?php echo $this->Html->link(__('view Activity Logs.'), array('action' => 'index'));?>
</div>
