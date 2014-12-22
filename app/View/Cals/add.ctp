<div class="cals form">
<?php echo $this->Form->create('Cal'); ?>
	<fieldset>
		<legend><?php echo __('Add Cal'); ?></legend>
	<?php
		echo $this->Form->input('FECHA_CAL');
		echo $this->Form->input('DIA_TRABAJADO');
		echo $this->Form->input('NOMBRE_DIA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cals'), array('action' => 'index')); ?></li>
	</ul>
</div>
