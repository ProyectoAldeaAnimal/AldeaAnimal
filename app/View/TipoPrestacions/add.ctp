<div class="tipoPrestacions form">
<?php echo $this->Form->create('TipoPrestacion'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Prestacion'); ?></legend>
	<?php
		echo $this->Form->input('NOMBRE_TIPO_PRES');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Prestacions'), array('action' => 'index')); ?></li>
	</ul>
</div>
