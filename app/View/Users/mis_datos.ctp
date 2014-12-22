<?php 
 $this->layout = 'headClientes';
?>

<div class="User view">
<legend><FONT COLOR="#229b0d"><h3><?php echo __('Mis Datos Personales:'); ?></h3></FONT></legend>

	<br>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su rut es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['RUT_CLI']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su nombre Completo es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['NOMBRE_CLI']); ?> <?php echo h($User['User']['APELLIDO_PCLI']); ?> <?php echo h($User['User']['APELLIDO_MCLI']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su E-mail es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['MAIL_CLI']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su teléfono es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['TEL_CLI']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Usted fue registrado el día:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['FECHA_REGISTRO_CLI']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su dirección es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['DIR_CLI']); ?></div>
		</div>
	</legend>
	<legend>
		
		<?php 
		if($User['User']['HABILITADO_CLI'])
		echo $this->Html->div('alert alert-success', 'Usted se encuentra habilitado para usar el sistema');
		
		else echo $this->Html->div('alert alert-danger', 'Usted no se encuentra habilitado para usar el sistema');?>
	</legend>

</div>
<div class="actions">

	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>

	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Mis Datos'), array('action' => 'edit', $User['User']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Cambiar Contraseña'), array('action' => 'cambiar_pass', $User['User']['ID'])); ?> </li>
	</ul>
</div>
