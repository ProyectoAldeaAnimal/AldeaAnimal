<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Edit Group'); ?></legend>
	<?php
		echo $this->Form->input('ID_GRUPO');
		echo $this->Form->input('NOMBREGRUPO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Group.ID_GRUPO')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Group.ID_GRUPO'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
	</ul>
</div>
