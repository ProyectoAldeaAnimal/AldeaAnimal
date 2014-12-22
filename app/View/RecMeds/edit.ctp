<div class="recMeds form">
<?php echo $this->Form->create('RecMed'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rec Med'); ?></legend>
	<?php
		echo $this->Form->input('ID_RECETA');
		echo $this->Form->input('ID_ATENCION');
		echo $this->Form->input('TIPO');
		echo $this->Form->input('OBS_RECETA');
		echo $this->Form->input('Farmaco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RecMed.ID_RECETA')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('RecMed.ID_RECETA'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rec Meds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farmacos'), array('controller' => 'farmacos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farmaco'), array('controller' => 'farmacos', 'action' => 'add')); ?> </li>
	</ul>
</div>
