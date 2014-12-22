<?php 
  $this->layout = 'headClientes';

?>
<div class="agendas index">
	<h3><?php echo __('Mis Solicitudes de Hora'); 
	?></h3>
	<br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo __('Mascota'); ?></th>
			<th><?php echo __('Veterinaio'); ?></th>
			<th><?php echo __('Prestación'); ?></th>
			<th><?php echo __('Estado Solicitud'); ?>&nbsp;</th>
			<th><?php echo __('Fecha Solicitud'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($agendas as $agenda): 
			if(isset($ofertaHors[$agenda['Agenda']['ID_AGENDA']])):?>
	<tr>
		
		<td>
			<?php echo $agenda['Ma']['NOMBRE_MAS']; ?>
		</td>
		<td>
			<?php echo $agenda['Vet']['name']; ?>
		</td>
		<td>
			<?php echo $agenda['Pre']['NOMBRE_PRES']; ?>
		</td>
		<td>
				 <?php if($agenda['Agenda']['ESTADO_AGENDA']=='A'):?>  <FONT COLOR="#229b0d"><?php echo 'Aceptada'?></FONT>
				 <?php endif?>

				 <?php if($agenda['Agenda']['ESTADO_AGENDA']=='P'):?>  <FONT COLOR="#808000">Pendiente</FONT>
				 <?php endif?>

				 <?php if($agenda['Agenda']['ESTADO_AGENDA']=='R'):?>  <FONT COLOR="#FF0000">Rechazada</FONT>
				 <?php endif?>
				&nbsp;</td>

		<td><?php echo h($ofertaHors[$agenda['Agenda']['ID_AGENDA']]); ?>&nbsp;</td>
		<td class="actions">
			
			<?php if ($agenda['Agenda']['ESTADO_AGENDA']!='A')echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $agenda['Agenda']['ID_AGENDA']), array(), __('Are you sure you want to delete # %s?', $agenda['Agenda']['ID_AGENDA'])); ?>
		</td>
	</tr>
<?php 
	endif;
	endforeach; ?>
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
