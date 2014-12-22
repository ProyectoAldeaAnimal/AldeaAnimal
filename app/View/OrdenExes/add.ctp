<?php 
	$this->layout= 'head';
	$atenciones;
	foreach ($atencions as $key => $atencion) {
	 	$atenciones = $key;
	}
?>
<div class="ordenExes form">
<?php echo $this->Form->create('OrdenEx'); ?>
	<fieldset>
		<h3><?php echo __('Creando Orden de Examen'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('ID_TIPO_EX', array(
			'label' => 'Seleccione el tipo de examen a realizar : <br>',
			'class' => 'form-control',
			'options' => $tipoExes
			));
		echo $this->Form->input('ID_ATENCION', array(
			'label' => 'Seleccione la atención a la que corresponde este examen : <br>',
			'class' => 'form-control',
			'options' => $atencions,
			'selected'=> $atenciones
			));
		echo $this->Form->input('FECHA_ORDEN_EX', array(
			'label' => 'Seleccione fecha en la que se emitió la orden: <br>'
			));
		echo $this->Form->input('MOTIVO_EX', array(
			'label' => 'Indique el motivo del examen: <br>',
			'class' => 'form-control'
			));
		echo $this->Form->input('PLAZO_SUGERIDO', array(
			'label' => 'Indique el plazo sugerido para toma el examen: <br>',
			'class' => 'form-control'
			));
		echo $this->Form->input('OBS_ORDEN_EX', array(
			'label' => 'Observacinoes adicionales que estime pertinentes: <br>',
			'class' => 'form-control'
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