<div class="ordenHosps form">
<?php echo $this->Form->create('OrdenHosp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Orden Hosp'); ?></legend>
	<?php
		echo $this->Form->input('ID_ORDEN_HOSP');
		echo $this->Form->input('ID_ATENCION');
		echo $this->Form->input('FECHA_ORDEN_HOSP');
		echo $this->Form->input('DURACION_ESTIMADA_HOSP');
		echo $this->Form->input('MOTIVO_HOSP');
		echo $this->Form->input('FECHA_SUGERIDA_HOSP');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrdenHosp.ID_ORDEN_HOSP')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('OrdenHosp.ID_ORDEN_HOSP'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Hosps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
