<div class="aerSearches index">
	<h2><?php echo __('AER Search');?></h2>	
<?php  
    echo $this->Form->create('AerSearch', array('action' => 'search')); 
    echo $this->Form->input("q", array('label' => 'Drug Name:'));
    echo $this->Form->end("Search");
?>
    <br />
    <h3><u>Results</u></h3>
	<br />
	<dl>
        <?php $i = 0;
    	foreach ($aerSearches as $aerSearch):?>
    	<dt><?php echo h($aerSearch['AerSearch']['name']) . ':';?>&nbsp;</dt>    		    		
    	<dd><?php echo 'ready to search'?>&nbsp;</dd>
        <?php endforeach;?>
     </dl>
     <br />
	<h3><b><?php echo __('Under Construction...');?></b></h3>
</div>