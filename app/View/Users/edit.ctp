<?php 
 $this->layout = 'headClientes';
?>
<div class="User form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<h3><?php echo __('Editar Mis Datos'); ?></h3>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('ID_GROUP', array('type'=> 'hidden'));
		echo $this->Form->input('RUT_CLI' ,array('label'=> 'Rut','type'=>'text','class'=>"form-control required rut", 'placeholder'=>"Rut", 'id'=>"rut", 'required autofocus'));
		echo $this->Form->input('NOMBRE_CLI',array('label'=> 'Nombre','class'=>"form-control"));
		echo $this->Form->input('APELLIDO_PCLI',array('label'=> 'Apellido Paterno','class'=>"form-control"));
		echo $this->Form->input('APELLIDO_MCLI',array('label'=> 'Apellido Materno','class'=>"form-control"));
		echo $this->Form->input('MAIL_CLI',array('label'=> 'E-Mail','class'=>"form-control"));
		echo $this->Form->input('TEL_CLI',array('label'=> 'Teléfono','class'=>"form-control"));
		echo $this->Form->input('FECHA_REGISTRO_CLI',array('type'=> 'hidden','class'=>"form-control"));
		echo $this->Form->input('DIR_CLI',array('label'=> 'Dirección','class'=>"form-control"));
		echo $this->Form->input('HABILITADO_CLI',array('type'=> 'hidden','class'=>"form-control"));
		echo $this->Form->input('PASSWORD_CLI',array('label'=> 'Contraseña','class'=>"form-control", 'type'=>'hidden'));
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