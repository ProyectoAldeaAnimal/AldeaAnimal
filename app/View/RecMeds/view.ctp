
<?php 
$this->layout = 'headVets'
?>

<div class="container well">
	<div class="recMeds view">
		<legend><FONT COLOR="#229b0d"><h3><?php
			if($recmed['Recmed']['TIPO']=='R'){
						echo __('Receta N°'.h($recmed['Recmed']['ID_RECETA']).':'); 
						
					}
					else if($recmed['Recmed']['TIPO']=='M') echo __('Medicación N°'.h($recmed['Recmed']['ID_RECETA']).':');
					else echo 'No especificado';
					

			 ?></h3>
			</FONT></legend>
			<br>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Atencion a la que pertence:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($recmed['Atencion']['FECHA_ATENCION']); ?></div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Tipo:'); ?></button></div>
				<div class="col col-md-6"><?php 
					if($recmed['Recmed']['TIPO']=='R'){
						echo 'Receta';
					}
					else if($recmed['Recmed']['TIPO']=='M') echo 'Medicación';
					else echo 'No especificado';
					 ?>
					</div>
			</div>	
		</legend>
		<legend>
			<div class="row">
				<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Observaciones:'); ?></button></div>
				<div class="col col-md-6"><?php echo h($recmed['Recmed']['OBS_RECETA']); ?></div>
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
			<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?> </li>
		</ul>
	</div>
	<br>
	<div class="related">
		<FONT COLOR="#229b0d"><h3><?php
			if($recmed['Recmed']['TIPO']=='R'){
						echo __('Fármacos Recetados'); 
					
						
					}
					else if($recmed['Recmed']['TIPO']=='M') echo __('Fármacos Administrados'); 
					else echo 'No especificado';
					


		 ?></h3></FONT>
		<?php if (!empty($recmed['Farmaco'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
		
			<th><?php echo __('Nombre Fármaco'); ?></th>
			<th><?php echo __('Laboratorio'); ?></th>
			<th><?php echo __('Nombre Genérico'); ?></th>
			<th><?php echo __('Posología'); ?></th>
		</tr>
		<?php foreach ($recmed['Farmaco'] as $farmaco): ?>
			<tr>
				
				<td><?php echo $farmaco['NOMBRE_FARMACO']; ?></td>
				<td><?php echo $farmaco['LABORATORIO_MEDICAMENTO']; ?></td>
				<td><?php echo $farmaco['NOMBRE_GENERICO']; ?></td>
				<td><?php 
					$temp;
					foreach ($posologias as $key => $posologia) {
						if($posologia['FarRec']['ID_FAR'] ==$farmaco['ID_FAR']) $temp =$posologia['FarRec']['POSOLOGIA']; 
					}

				echo $temp;?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>

</div>
