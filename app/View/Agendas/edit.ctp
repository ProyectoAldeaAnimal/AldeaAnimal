<?php 
  $this->layout = 'headClientes';
?>
<div class="agendas form">
<?php echo $this->Form->create('Agenda'); ?>
	<fieldset>
		<legend><?php echo __('Edit Agenda'); ?></legend>
	<?php
		echo $this->Form->input('ID_AGENDA');
		echo $this->Form->input('ID_MAS');
		echo $this->Form->input('ID_VET');
		echo $this->Form->input('ID_PRES');
		echo $this->Form->input('ESTADO_AGENDA');
		echo $this->Form->input('OfertaHor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Agenda.ID_AGENDA')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Agenda.ID_AGENDA'))); ?></li>
		<li><?php echo $this->Html->link(__('List Agendas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ma'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pres'), array('controller' => 'pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre'), array('controller' => 'pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('controller' => 'oferta_hors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
	</ul>
</div>
