<?php 

$this->layout= 'headClientes';

?>
<div class="mas view">
<h3 class= "text-center"><?php echo __('Ficha Mascota'); ?></h3>

	
		<br>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Identificador:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ma['Ma']['ID_MAS']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Tipo Mascota:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ma['TipoMa']['CLASE']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Dueño Mascota:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ma['User']['name']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Nombre Mascota:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ma['Ma']['NOMBRE_MAS']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Raza Mascota:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ma['Ma']['RAZA_MAS']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Fehca Nacimiento:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ma['Ma']['FECHA_NACIMIENTO']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Sexo Mascota:'); ?></button></div>
			<div class="col col-md-6">
			<?php
			if(h($ma['Ma']['SEXO'])=='H')
			 echo'Hembra'; 
			else echo'Macho'; 
			?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Color Mascota:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ma['Ma']['COLOR']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Características Mascota:'); ?></button></div>
			<div class="col col-md-6">
				<?php 
					if($ma['Ma']['CARACTERISTICA']) echo h($ma['Ma']['CARACTERISTICA']);
					else echo 'No especificado' ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Fehca Ingreso:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($ficha['Ficha']['FECHA_INGRESO']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Fecha defunción Mascota:'); ?></button></div>
			<div class="col col-md-6">
				<?php 
					if($ma['Ma']['FECHA_DEFUNCION']) echo h($ma['Ma']['FECHA_DEFUNCION']);
					else echo 'La mascota no registra dicha fecha.' ?></div>
		</div>	
	</legend>

	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Esterilización:'); ?></button></div>
			<div class="col col-md-6">
				<?php 
					if($ficha['Ficha']['ESTERILIZACION']) echo 'La mascota se encuentra esterilizada';
					else echo 'La mascota no registra esterilización.' ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Fecha Esterilización:'); ?></button></div>
			<div class="col col-md-6">
				<?php 
					if($ficha['Ficha']['FECHA_ESTERILIZACION']) echo $ficha['Ficha']['FECHA_ESTERILIZACION'];
					else echo 'La mascota no registra esterilización.' ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Observaciones Esterilización:'); ?></button></div>
			<div class="col col-md-6">
				<?php 
					if($ficha['Ficha']['OBS_ESTERILIZACION']) echo $ficha['Ficha']['OBS_ESTERILIZACION'];
					else echo 'La mascota no registra esterilización.' ?></div>
		</div>	
	</legend>
	
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('controller'=>'users','action' => 'verDatosMascotas', $ma['Ma']['ID_MAS'])); ?> </li>

	</ul>
</div>
