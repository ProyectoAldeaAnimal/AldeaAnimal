<div class="ordenExes form">
<?php echo $this->Form->create('OrdenEx'); ?>
	<fieldset>
		<legend><?php echo __('Edit Orden Ex'); ?></legend>
	<?php
		echo $this->Form->input('ID_ORDEN_EX');
		echo $this->Form->input('ID_TIPO_EX');
		echo $this->Form->input('ID_ATENCION');
		echo $this->Form->input('FECHA_ORDEN_EX');
		echo $this->Form->input('MOTIVO_EX');
		echo $this->Form->input('PLAZO_SUGERIDO');
		echo $this->Form->input('OBS_ORDEN_EX');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OrdenEx.ID_ORDEN_EX')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('OrdenEx.ID_ORDEN_EX'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orden Exes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Exes'), array('controller' => 'tipo_exes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Ex'), array('controller' => 'tipo_exes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
	</ul>
</div>
