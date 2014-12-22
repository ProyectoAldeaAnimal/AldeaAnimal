<div class="clis form">
<?php echo $this->Form->create('Cli'); ?>
	<fieldset>
		<legend><?php echo __('Add Cli'); ?></legend>
	<?php
		echo $this->Form->input('ID_GROUP');
		echo $this->Form->input('RUT_CLI');
		echo $this->Form->input('NOMBRE_CLI');
		echo $this->Form->input('APELLIDO_PCLI');
		echo $this->Form->input('APELLIDO_MCLI');
		echo $this->Form->input('MAIL_CLI');
		echo $this->Form->input('TEL_CLI');
		echo $this->Form->input('FECHA_REGISTRO_CLI');
		echo $this->Form->input('DIR_CLI');
		echo $this->Form->input('HABILITADO_CLI');
		echo $this->Form->input('PASSWORD_CLI');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clis'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
