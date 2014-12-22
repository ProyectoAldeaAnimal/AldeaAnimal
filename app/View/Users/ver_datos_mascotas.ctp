<?php 
$this->layout= 'headClientes';
/*
echo $mascotasCli[0]['mas']['ID_MAS']; 
echo $mascotasCli[0]['mas']['ID_TIPO_MAS'];
echo $mascotasCli[0]['mas']['ID'];
echo $mascotasCli[0]['mas']['NOMBRE_MAS'];
echo $mascotasCli[0]['mas']['RAZA_MAS'];
echo $mascotasCli[0]['mas']['FECHA_NACIMIENTO'];
echo $mascotasCli[0]['mas']['SEXO'];
echo $mascotasCli[0]['mas']['COLOR'];
echo $mascotasCli[0]['mas']['CARACTERISTICA'];
echo $mascotasCli[0]['mas']['FECHA_DEFUNCION'];
*/
?>
<div class="mas index">
	<h3><i class="fa fa-paw"></i> <?php echo __('Mis Mascotas'); ?></h3>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			
			<th>Tipo</th>
			<th>Nombre</th>
			<th>Raza</th>
			<th>Nacimiento</th>
			<th>Sexo</th>
			<th>Color</th>
			<th>Catacterísticas</th>
			<th>Defunción</th>
			
			<th class="actions"><?php echo __('Acciones'); ?></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($mascotasCli as $mascotasCli): ?>
	<tr>
	
		<td>
			<?php
				for($i=0;$i< count($tipos);$i++){
					if($mascotasCli['mas']['ID_TIPO_MAS']== $tipos[$i]['tipo_mas']['ID_TIPO_MAS']){
						echo $tipos[$i]['tipo_mas']['CLASE'];
					}
				} 
		 	?>
		</td>
		<td><?php echo h($mascotasCli['mas']['NOMBRE_MAS']); ?>&nbsp;</td>
		<td><?php echo h($mascotasCli['mas']['RAZA_MAS']); ?>&nbsp;</td>
		<td><?php echo h($mascotasCli['mas']['FECHA_NACIMIENTO']); ?>&nbsp;</td>
		<td><?php echo h($mascotasCli['mas']['SEXO']); ?>&nbsp;</td>
		<td><?php echo h($mascotasCli['mas']['COLOR']); ?>&nbsp;</td>
		<td><?php echo h($mascotasCli['mas']['CARACTERISTICA']); ?>&nbsp;</td>
		<td><?php echo h($mascotasCli['mas']['FECHA_DEFUNCION']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editMascota', $mascotasCli['mas']['ID_MAS'])); ?>
			<?php echo $this->Html->link(__('Ver Ficha'), array('action' => 'verMascota', $mascotasCli['mas']['ID_MAS'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>	

</div>

<div class="actions">
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
</div>