<?php 
  $this->layout = 'headClientes';
?>
<div class="agendas form">
<?php echo $this->Form->create('Agenda'); ?>
	<fieldset>
		<h3><?php echo __('Solicitar Agendamiento'); ?></h3>
		<br>
	<?php

		echo $this->Form->input('ID_MAS', array(
			'label' => 'Seleccione la mascota que desea atender en la clínica : <br>',
			'options' => $mas,
			'class' => 'form-control'
			));
		echo $this->Form->input('ID_VET', array(
			'label' => 'Seleccione profesional con el cual desea atender a su mascota : <br>',
			'options' => $vets,
			'class' => 'form-control'
			));
		echo $this->Form->input('ID_PRES', array(
			'label' => 'Seleccione la prestación con la cual desea solicitar hora : <br>',
			'options' => $pres,
			'class' => 'form-control'
			));
		
		echo $this->Form->input('ESTADO_AGENDA', array(
			'type' => 'hidden'
			));
		echo $this->Form->input('OfertaHor', array(
			'label' => 'Seleccione oferta Horaria de su veterinario : <br>',
			'options' => $ofertaHors,
			'type' => 'select',
			'class' => 'form-control'
			));
		?></fieldset>
		<FONT COLOR="#FFFFFF">
		<?php
		echo $this->Form->input('Prueba', array(
			'label' => 'Seleccione oferta Horaria de su veterinario : <br>',	
			'type' => 'text',
			'id' => 'datepicker',
			'style' => 'color:#FFFFF;',
			'class' => 'form-control'
			));
		?>
		</FONT>
	
<?php
	if($ofertaHors!='El veterinario no tiene oferta Horaria' ){
		echo $this->Form->end(__('Solicitar')); 	
	}
 ?>
</div>
<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>

	<script>
 $(function() {
 	 $.datepicker.regional['es'] = {
	 closeText: 'Cerrar',
	 prevText: '<Ant',
	 nextText: 'Sig>',
	 currentText: 'Hoy',
	 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
	 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
	 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
	 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
	 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
	 weekHeader: 'Sm',
	 dateFormat: 'dd/mm/yy',
	 firstDay: 1,
	 isRTL: false,
	 showMonthAfterYear: false,
	 yearSuffix: ''
	 };
	 $.datepicker.setDefaults($.datepicker.regional['es']);
    $( "#datepicker" ).datepicker({
    		changeYear: true,
    		changeMonth: true,
    		showButtonPanel: true,
    		 dateFormat: "yy-mm-dd"
		});
  });
  </script>