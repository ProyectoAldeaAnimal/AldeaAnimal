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
	<h3><?php echo __('Mis Mascotas'); ?></h3>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			
			<th>Tipo de Mascota</th>
			<th>Nombre Mascota</th>
			<th>Raza Mascota</th>
			<th>Fecha Nacimiento</th>
			<th>Sexo</th>
			<th>Color</th>
			<th>Catacterísticas</th>
			<th>Fecha Defunción</th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>

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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mascotasCli['mas']['ID_MAS'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mascotasCli['mas']['ID_MAS'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mascotasCli['mas']['ID_MAS']), array(), __('Are you sure you want to delete # %s?', $mascotasCli['mas']['ID_MAS'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

</div>

