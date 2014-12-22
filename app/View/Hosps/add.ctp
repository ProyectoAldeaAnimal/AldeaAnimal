<?php 
	$this->layout= 'head';
	$ordenes;
	foreach ($ordenHosps as $key => $ordenHosp) {
	 	$ordenes = $key;
	}
?>
<div class="hosps form">
<?php echo $this->Form->create('Hosp'); ?>
	<fieldset>
		<h3><?php echo __('Generar Hospitalización'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('ID_ORDEN_HOSP', array(
			'label' => 'Seleccione la orden Hospitalización: <br>',
			'options' => $ordenHosps,
			'class' => 'form-control',
			'selected'=> $ordenes
			));

		echo $this->Form->input('ID_VET', array(
			'label' => 'Seleccione el veterinario a cargo de la Hospitalización: <br>',
			'options' => $vets,
			'class' => 'form-control'
			));
		echo $this->Form->input('FECHA_INGRESO_HOSP', array(
			'label' => 'Ingrese la fecha de ingeso: <br>'
			));
		echo $this->Form->input('FECHA_ALTA', array(
			'label' => 'Ingrese la fecha de alta estimada: <br>'
			));
		echo $this->Form->input('CANIL', array(
			'label' => 'Ingrese número del canil de la mascota:',
			'class' => 'form-control'
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>