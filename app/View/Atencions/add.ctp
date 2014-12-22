<?php 
  $this->layout = 'head';
?>
<div class="atencions form">
<?php echo $this->Form->create('Atencion'); ?>
	<fieldset>
		<h3><?php echo __('Creando Una Nueva Atención'); ?></h3>
		<br>
	<?php

		echo $this->Form->input('ID_ATENCION', array(
			'type' => 'hidden',

			));
		echo $this->Form->input('ID_PRES', array(
			'label' => 'Seleccione el servicio a realizar: <br>',
			'class'=> 'form-control',
			'options' => $pres
			));
		echo $this->Form->input('ID_MAS', array(
			'label' => 'Seleccione seleccione la mascota a atender: <br>',
			'class'=> 'form-control',
			'options' => $mas
			));
		echo $this->Form->input('ID_VET', array(
			'label' => 'Usted es:',
			'class'=> 'form-control',
			'options' => $vets
			));
		echo $this->Form->input('FECHA_ATENCION', array(
			'label' => 'Ingrese la fecha: <br>'
			
			));
		echo $this->Form->input('PESO', array(
			'label' => 'Ingrese el peso de la mascota en Kg en decimales (Ej: 1,00):',
			'class'=> 'form-control'
			
			));
		echo $this->Form->input('TEMPERATURA', array(
			'label' => 'Ingrese la temperatura de la mascota C° en decimales (Ej: 1,00)::',
			'class'=> 'form-control'
			
			));
		echo $this->Form->input('MOTIVO', array(
			'label' => 'Ingrese en pocas palabras el motivo de la atención:',
			'class'=> 'form-control'
			
			));
		echo $this->Form->input('ANAMNESIS', array(
			'label' => 'Ingrese antecedentes aportados por el dueño (ANAMNESIS):',
			'type'  => 'textarea',
			'class' =>'colorBlanco' ,
			'class'=> 'form-control'
			
			));
		echo $this->Form->input('DIAGNOSTICO', array(
			'label' => 'Ingrese su diagnóstico:',
			'type'  => 'textarea',
			'class' =>'colorBlanco',
			'class'=> 'form-control'
			
			));
		echo $this->Form->input('Pat', array(
			'label' => 'Seleccione alguna de las patologías identificadas o ninguna si no es necesario:',
			'class'=> 'form-control'
			
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Generar')); ?>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>
