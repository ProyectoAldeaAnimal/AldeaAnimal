<div class="tipoMas form">
<?php echo $this->Form->create('TipoMa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Ma'); ?></legend>
	<?php
		echo $this->Form->input('ID_TIPO_MAS');
		echo $this->Form->input('ESPECIE');
		echo $this->Form->input('CLASE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoMa.ID_TIPO_MAS')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TipoMa.ID_TIPO_MAS'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Mas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mas'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
	</ul>
</div>
