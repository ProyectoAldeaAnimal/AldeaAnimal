<div class="prestacions form">
<?php echo $this->Form->create('Prestacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Prestacion'); ?></legend>
	<?php
		echo $this->Form->input('ID_TIPO_PRES');
		echo $this->Form->input('NOMBRE_PRES');
		echo $this->Form->input('NUMERO_BLOQUES');
		echo $this->Form->input('PRECIO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prestacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Prestacions'), array('controller' => 'tipo_prestacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Prestacion'), array('controller' => 'tipo_prestacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
