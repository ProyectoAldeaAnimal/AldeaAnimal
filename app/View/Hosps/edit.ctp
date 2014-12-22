<div class="hosps form">
<?php echo $this->Form->create('Hosp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hosp'); ?></legend>
	<?php
		echo $this->Form->input('ID_HOSP');
		echo $this->Form->input('ID_ORDEN_HOSP');
		echo $this->Form->input('ID_VET');
		echo $this->Form->input('FECHA_INGRESO_HOSP');
		echo $this->Form->input('FECHA_ALTA');
		echo $this->Form->input('CANIL');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hosp.ID_HOSP')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Hosp.ID_HOSP'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hosps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Hosps'), array('controller' => 'orden_hosps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Hosp'), array('controller' => 'orden_hosps', 'action' => 'add')); ?> </li>
	</ul>
</div>
