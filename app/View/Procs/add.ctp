<?php
$this->layout= 'head';

	
	$atenciones;
	foreach ($atencions as $key => $atencion) {
	 	$atenciones = $key;
	}
?>


<div class="procs form">
<?php echo $this->Form->create('Proc'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Crear un nuevo procedimiento'); ?></h3>
	<?php
		echo $this->Form->input('ID_ATENCION', array(
				'label' => 'Atención: <br>',
				'options' => $atencions,
				'class'=> 'form-control',
				'selected'=> $atenciones
			));
		echo $this->Form->input('OBS_PROC', array(
				'label' => 'Ingrese sus observaciones: <br>',
				'class'=> 'form-control',
				'type' => 'textarea'
			));
		echo $this->Form->input('FECHA_SGTE_PROC', array(
				'label' => 'Fecha propuesta proxima cita: <br>'
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
		<div id="ex5">
        <?php
            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
          ?>
	</div>
	<ul>

		<li><?php echo $this->Html->link(__('Anterior'), array('controller'=>'vets','action' => 'atencion_medica')); ?></li>
	</ul>
</div>
