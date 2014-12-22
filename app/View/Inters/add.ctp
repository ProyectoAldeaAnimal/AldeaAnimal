<?php 
	$this->layout= 'head';
	$ordenInters;
	foreach ($ordenInts as $key => $ordenInt) {
	 	$ordenInters = $key;
	}
?>
<div class="inters form">
<?php echo $this->Form->create('Inter'); ?>
	<fieldset>
		<h3><?php echo __('Generando Intervención'); ?></h3>
	<?php
		echo $this->Form->input('ID_ORDEN_INT', array(
			'label' => 'Seleccione la orden de intervención correspondiente: <br>',
			'options' => $ordenInts,
			'class' => 'form-control',
			'selected'=> $ordenInters
			
			));
		echo $this->Form->input('ID_VET', array(
			'label' => 'Seleccione el veterinario a cargo: <br>',
			'options' => $vets,
			'class' => 'form-control'
			));
		echo $this->Form->input('FECHA_INGRESO_INT', array(
			'label' => 'Ingrese fecha y hora de ingreso a interveción: <br>'
			));
		echo $this->Form->input('FECHA_TERMINO_INT', array(
			'label' => 'Ingrese fecha y hora de término de la intervención: <br>'
			));
		echo $this->Form->input('OBS_INT', array(
			'label' => 'Observaciones: <br>',
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