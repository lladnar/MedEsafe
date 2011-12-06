<div class="groups form">
    <?php echo $this->Form->create('Group');?>    	
    <fieldset>
        <h2><?php echo __('Edit Group');?></h2>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
    <br />
    <div align="right">
        <?php echo $this->Html->link(__('Back to Groups'), array('action' => 'index'));?>
    </div>
</div>
