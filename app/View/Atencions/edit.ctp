<div class="atencions form">
<?php echo $this->Form->create('Atencion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Atencion'); ?></legend>
	<?php
		echo $this->Form->input('ID_ATENCION');
		echo $this->Form->input('ID_PRES');
		echo $this->Form->input('ID_MAS');
		echo $this->Form->input('ID_TIPO_PRES');
		echo $this->Form->input('FECHA_ATENCION');
		echo $this->Form->input('PESO');
		echo $this->Form->input('TEMPERATURA');
		echo $this->Form->input('MOTIVO');
		echo $this->Form->input('ANAMNESIS');
		echo $this->Form->input('DIAGNOSTICO');
		echo $this->Form->input('Pat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Atencion.ID_ATENCION')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Atencion.ID_ATENCION'))); ?></li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pres'), array('controller' => 'pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre'), array('controller' => 'pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Pres'), array('controller' => 'tipo_pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pre'), array('controller' => 'tipo_pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ma'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pats'), array('controller' => 'pats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pat'), array('controller' => 'pats', 'action' => 'add')); ?> </li>
	</ul>
</div>
