<?php 
$this->layout = 'head';
	$atenciones;
	foreach ($atencions as $key => $atencion) {
	 	$atenciones = $key;
	}
?>
<div class="ordenHosps form">
<?php echo $this->Form->create('OrdenHosp'); ?>
	<fieldset>
		<h3><?php echo __('Generando Orden Hospitalización'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('ID_ATENCION', array(
			'label' => 'Seleccione la atención a la que corresponde esta Hospitalización: <br>',
			'options' => $atencions,
			'class' => 'form-control',
			'selected'=> $atenciones
			));
		echo $this->Form->input('FECHA_ORDEN_HOSP', array(
			'label' => 'Indique el la fehca de emisión de la orden: <br>'
			));
		echo $this->Form->input('DURACION_ESTIMADA_HOSP', array(
			'label' => 'Indique la duración estimada de la Hospitalización: <br>',
			'class' => 'form-control'
			));
	
		echo $this->Form->input('MOTIVO_HOSP', array(
			'label' => 'Indique el motivo de la Hospitalización: <br>',
			'class' => 'form-control'
			));
		echo $this->Form->input('FECHA_SUGERIDA_HOSP', array(
			'label' => 'Seleccione fecha sugeridad para la realización de la orden: <br>'
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>
