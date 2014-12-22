<div class="pats form">
<?php echo $this->Form->create('Pat'); ?>
	<fieldset>
		<legend><?php echo __('Add Pat'); ?></legend>
	<?php
		echo $this->Form->input('NOMBRE_PAT');
		echo $this->Form->input('TIPO_PAT');
		echo $this->Form->input('GRAVEDAD_PAT');
		echo $this->Form->input('Farmaco');
		echo $this->Form->input('Atencion');
		echo $this->Form->input('TipoMa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Farmacos'), array('controller' => 'farmacos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farmaco'), array('controller' => 'farmacos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Mas'), array('controller' => 'tipo_mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Ma'), array('controller' => 'tipo_mas', 'action' => 'add')); ?> </li>
	</ul>
</div>
