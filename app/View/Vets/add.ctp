<?php
$this->layout= 'head';
?>
<div class="vets form">
<?php echo $this->Form->create('Vet'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Agregar Veterinario'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('ID_GROUP', array(
			'label' => 'Grupo: <br>',
			'options' => $groups
			));
		echo $this->Form->input('RUT_VET',array('label'=> 'Rut','type'=>'text','class'=>"form-control required rut", 'placeholder'=>"Rut", 'id'=>"rut", 'required autofocus'));	
		echo $this->Form->input('NOMBRE_VET', array(
			'label' => 'Nombre: ',
			'class'=>"form-control"
			));
		echo $this->Form->input('APELLIDO_PVET', array(
			'label' => 'Apellido Paterno: ',
			'class'=>"form-control"
			));
		echo $this->Form->input('APELLIDO_MVET', array(
			'label' => 'Apellido Materno: ',
			'class'=>"form-control"
			));
		echo $this->Form->input('TEL_VET', array(
			'label' => 'Teléfono: <br>',
			'class'=>"form-control"
			));
		echo $this->Form->input('DIR_VET', array(
			'label' => 'Dirección: <br>',
			'class'=>"form-control"
			));
		echo $this->Form->input('MAIL_VET', array(
			'label' => 'E-mail: ',
			'class'=>"form-control"
			));
		echo $this->Form->input('FECHA_REGISTRO_VET', array(
			'label' => 'Fecha Registro: <br>'
			));
		echo $this->Form->input('HABILITADO', array(
			'label' => 'Habilitado?: <br>'
			));
		echo $this->Form->input('PASSWORD_VET', array(
			'label' => 'Contraseña: ',
			'class'=>"form-control"
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<div id="ex5">
	    <?php
	        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
	      ?>
	  </div>
	<ul>

		<li><?php echo $this->Html->link(__('Anterior'), array('action' => 'registro_vet')); ?></li>
	</ul>
</div>
<script>
  $('#rut').Rut({
    on_error: function(){swal(" Rut Incorrecto!", "Debe contener puntos y guiones", "error");
    
  }
      });
</script>