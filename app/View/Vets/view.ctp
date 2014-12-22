<?php
		$usuario = AuthComponent::user();
	if($usuario[0]['Group']['ID_GRUPO']==2) $this->layout= 'head';
	else $this->layout= 'heados';?>


	

	 <div class="Vets view">
		<legend><FONT COLOR="#229b0d"><h3><?php echo __('Mis Datos Personales:'); ?></h3></FONT></legend>

		<br>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su rut es:'); ?></button></div>
				<div class="col col-md-6"><?php echo  h($vet['Vet']['RUT_VET']);	 ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su nombre Completo es:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($vet['Vet']['NOMBRE_VET']); ?> <?php echo h($vet['Vet']['APELLIDO_PVET']); ?> <?php echo h($vet['Vet']['APELLIDO_MVET']); ?></div>
			</div>
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su E-mail es:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($vet['Vet']['MAIL_VET']); ?></div>
			</div>
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su teléfono es:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($vet['Vet']['TEL_VET']); ?></div>
			</div>
			
			
			
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Usted fue registrado el día:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($vet['Vet']['FECHA_REGISTRO_VET']); ?></div>
			</div>
			
			
			
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su dirección es:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($vet['Vet']['DIR_VET']); ?></div>
			</div>
		</legend>
		<legend>
			
			<?php 
			if($vet['Vet']['HABILITADO'])
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

		<h3><?php if($usuario[0]['Group']['ID_GRUPO']==2) echo __('Acciones'); ?></h3>
		<ul>
			<li><?php if($usuario[0]['Group']['ID_GRUPO']==2) echo $this->Html->link(__('Editar Mis Datos'), array('action' => 'edit', $vet['Vet']['ID_VET'])); ?> </li>
			<li><?php if($usuario[0]['Group']['ID_GRUPO']==2) echo $this->Html->link(__('Cambiar Contraseña'), array('action' => 'cambiar_pass', $vet['Vet']['ID_VET'])); ?> </li>
		</ul>
	</div>
