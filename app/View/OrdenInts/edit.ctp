<div class="ordenInts form">
<?php echo $this->Form->create('OrdenInt'); ?>
	<fieldset>
		<legend><?php echo __('Edit Orden Int'); ?></legend>
	<?php
		echo $this->Form->input('ID_ORDEN_INT');
		echo $this->Form->input('ID_ATENCION');
		echo $this->Form->input('ID_TIPO_INT');
		echo $this->Form->input('FECHA_SUGERIDA_INT');
		echo $this->Form->input('MOTIVO_INT');
		echo $this->Form->input('FECHA_ORDEN_INT');
		echo $this->Form->input('DURACION_ESTIMADA_INT');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrdenInt.ID_ORDEN_INT')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('OrdenInt.ID_ORDEN_INT'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Ints'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo De Ints'), array('controller' => 'tipo_de_ints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo De Int'), array('controller' => 'tipo_de_ints', 'action' => 'add')); ?> </li>
	</ul>
</div>
