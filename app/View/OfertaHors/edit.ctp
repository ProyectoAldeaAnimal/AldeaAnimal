<div class="ofertaHors form">
<?php echo $this->Form->create('OfertaHor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Oferta Hor'); ?></legend>
	<?php
		echo $this->Form->input('ID_OFERTA_HOR');
		echo $this->Form->input('ID_CAL');
		echo $this->Form->input('RUT_VET');
		echo $this->Form->input('ESTADO_AGENDAMIENTO');
		echo $this->Form->input('HORA_INICIO');
		echo $this->Form->input('HORA_TERMINO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OfertaHor.ID_OFERTA_HOR')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('OfertaHor.ID_OFERTA_HOR'))); ?></li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cals'), array('controller' => 'cals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cal'), array('controller' => 'cals', 'action' => 'add')); ?> </li>
	</ul>
</div>
