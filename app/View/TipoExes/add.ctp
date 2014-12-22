<?php
$this->layout= 'head';
?>
<div class="tipoExes form">
<?php echo $this->Form->create('TipoEx'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Agregar Tipo de Examen'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('NOMBRE_TIPO_EX', array(
			'label' => 'Nombre: ',
			'class' => 'form-control'
			
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Anterior'), array('action' => 'index')); ?></li>
	</ul>
</div>
