<?php
	$this->layout= 'head';
//	debug(date("Y:m:d H:i:s",strtotime(end($atencions))));

	
	$atenciones;
	foreach ($atencions as $key => $atencion) {
	 	$atenciones = $key;
	}
	
?>

<div class="recMeds form">
<?php echo $this->Form->create('RecMed'); ?>
	<fieldset>
		<h3><?php echo __('Realizando un Receta o Medicación'); ?></h3>
	<?php
		echo $this->Form->input('ID_ATENCION', array(
				'label' => 'Atención: <br>',
				'options' => $atencions,
				'class'=> 'form-control',
				'selected' => $atenciones
				//'selected' =>array('hour'=>''.date("H",strtotime(end($atencions))).'','day'=>date("d",strtotime(end($atencions))),
			));
		$rOm = array('M'=> 'Medicación', 'R' => 'Receta');
		echo $this->Form->input('TIPO', array(
				'label' => 'Seleccione si esta realizando una medicación o una receta: <br>',
				'options' => $rOm,
				'class'=> 'form-control'
			));
		echo $this->Form->input('OBS_RECETA', array(
				'label' => 'Ingrese las observaciones que estime pertinentes: <br>',
				'type' => 'textarea',
				'class'=> 'form-control'
			));
		for ($i=0; $i<$params['param']; $i++) {
			
			echo $this->Form->input('Farmaco '.$i, array(
				'label' => 'Fármaco '.($i+1).': <br>',
				'type' => 'select',
				'class'=> 'form-control',
				'options' => $farmacos
			));

			echo $this->Form->input('Posologia '.$i, array(
				'label' => 'Posología: <br>',
				'type' => 'textarea',
				'class'=> 'form-control' 
			));
		}

	?>
	</fieldset>
<?php echo $this->Form->end(__('Listo')); ?>
</div>
<div class="actions">
	<div id="ex5">
        <?php
            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
          ?>
	</div>
</div>

