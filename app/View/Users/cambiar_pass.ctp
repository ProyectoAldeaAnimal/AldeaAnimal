<?php 
$this->layout= 'headClientes';
?>
<div class="User form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<h3><?php echo __('Editar Mi Contraseña'); ?></h3>
	<?php
		
		echo $this->Form->input('PASSWORD_Actual',array('label'=> 'Contraseña Actual','class'=>"form-control",'type'=>'password'));
		echo $this->Form->input('PASSWORD_NUEVO',array('label'=> 'Contraseña Nueva','class'=>"form-control",'type'=>'password'));
		echo $this->Form->input('password_update',array('label'=> 'Confirma Contraseña ','class'=>"form-control",'type'=>'password'));

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