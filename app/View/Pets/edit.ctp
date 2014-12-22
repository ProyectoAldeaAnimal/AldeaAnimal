<div class="pets form">
<?php echo $this->Form->create('Pet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pet'); ?></legend>
	<?php
		echo $this->Form->input('ID_MAS');
		echo $this->Form->input('ID_TIPO_MAS');
		echo $this->Form->input('RUT_CLI');
		echo $this->Form->input('NOMBRE_MAS');
		echo $this->Form->input('RAZA_MAS');
		echo $this->Form->input('FECHA_NACIMIENTO');
		echo $this->Form->input('SEXO');
		echo $this->Form->input('COLOR');
		echo $this->Form->input('CARACTERISTICA');
		echo $this->Form->input('FECHA_DEFUNCION');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pet.ID_MAS')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pet.ID_MAS'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipe Pets'), array('controller' => 'tipe_pets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipe Pet'), array('controller' => 'tipe_pets', 'action' => 'add')); ?> </li>
	</ul>
</div>
