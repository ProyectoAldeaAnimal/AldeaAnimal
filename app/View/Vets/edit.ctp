<?php
	
	$usuario = AuthComponent::user();
	if($usuario[0]['Group']['ID_GRUPO']==2) $this->layout= 'head';
	else $this->layout= 'heados';
?>
	<div class="vets form">
	<?php echo $this->Form->create('Vet'); ?>
		<fieldset>
			<h3><?php echo __('Editar Datos'); ?></h3>
		<?php
			echo $this->Form->input('ID_VET');
			echo $this->Form->input('ID_GROUP', array(
			'type' => 'hidden'
			));
			echo $this->Form->input('RUT_VET',array('label'=> 'Rut','type'=>'text','class'=>"form-control required rut", 'placeholder'=>"Rut", 'id'=>"rut", 'required autofocus'));	
			echo $this->Form->input('NOMBRE_VET', array(
			'label' => 'Ingrese su nombre: '
			));
			echo $this->Form->input('APELLIDO_PVET', array(
			'label' => 'Ingrese su nombre: '
			));
			echo $this->Form->input('APELLIDO_MVET', array(
			'label' => 'Ingrese su apellido paterno: '
			));
			echo $this->Form->input('TEL_VET', array(
			'label' => 'Ingrese su apellido materno: '
			));
			echo $this->Form->input('DIR_VET', array(
			'label' => 'Ingrese su dirección: '
			));
			echo $this->Form->input('MAIL_VET', array(
			'label' => 'Ingrese su e-mail: '
			));
			echo $this->Form->input('FECHA_REGISTRO_VET', array(
			'type' => 'hidden'
			));
			echo $this->Form->input('HABILITADO', array(
			'type' => 'hidden'
			));
			echo $this->Form->input('PASSWORD_VET', array(
			'label' => 'Cambie su contraseña: ',
			'type' => 'hidden'
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
	<script>
      $('#rut').Rut({
        on_error: function(){swal(" Rut Incorrecto!", "Debe contener puntos y guiones", "error");
        
      }
      });
</script>