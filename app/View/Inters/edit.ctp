<div class="inters form">
<?php echo $this->Form->create('Inter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inter'); ?></legend>
	<?php
		echo $this->Form->input('ID_INT');
		echo $this->Form->input('ID_ORDEN_INT');
		echo $this->Form->input('ID_VET');
		echo $this->Form->input('FECHA_INGRESO_INT');
		echo $this->Form->input('FECHA_TERMINO_INT');
		echo $this->Form->input('OBS_INT');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inter.ID_INT')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Inter.ID_INT'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Ints'), array('controller' => 'orden_ints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Int'), array('controller' => 'orden_ints', 'action' => 'add')); ?> </li>
	</ul>
</div>
