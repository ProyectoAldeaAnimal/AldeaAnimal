<?php 
 $this->layout = 'heados';
?>

<div class="User view">
<legend><FONT COLOR="#229b0d"><h3><?php echo __('Mis Datos Personales:'); ?></h3></FONT></legend>

	<br>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su rut es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['RUT_VET']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su nombre Completo es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['NOMBRE_VET']); ?> <?php echo h($Vet['Vet']['APELLIDO_PVET']); ?> <?php echo h($Vet['Vet']['APELLIDO_MVET']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su E-mail es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['MAIL_VET']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su teléfono es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['TEL_VET']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Usted fue registrado el día:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['FECHA_REGISTRO_VET']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su dirección es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['DIR_VET']); ?></div>
		</div>
	</legend>
	<legend>
		
		<?php 
		if($Vet['Vet']['HABILITADO'])
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
		<li><?php echo $this->Html->link(__('Editar Mis Datos'), array('action' => 'edit2', $Vet['Vet']['ID_VET'])); ?> </li>
		<li><?php echo $this->Html->link(__('Cambiar Contraseña'), array('action' => 'cambiar_pass_admin', $Vet['Vet']['ID_VET'])); ?> </li>
	</ul>
</div>
