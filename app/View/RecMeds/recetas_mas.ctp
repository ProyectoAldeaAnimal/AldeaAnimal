
<?php 
$this->layout = 'headClientes';
?>

	<div class="recMeds index">
		<legend><FONT COLOR="#229b0d"><h3><?php echo __('Recetas Generadas');?></h3></FONT></legend>
		<br>
		<h4><i class="glyphicon glyphicon-ok"></i> Precione la fecha de anteción para más detalles</h4>
		<br>
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('Número Receta'); ?></th>
				<th><?php echo $this->Paginator->sort('Atención'); ?></th>
				<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
				<th><?php echo $this->Paginator->sort('Observaciones'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php 

			if(isset($recMeds)):
			foreach ($recMeds as $recMed): ?>
		<tr>
			<td><?php echo h($recMed['RecMed']['ID_RECETA']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($recMed['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view2', $recMed['Atencion']['ID_ATENCION']));

				?>
			</td>
			<td><?php 
					if($recMed['RecMed']['TIPO']=='R'){
						echo 'Receta';
					}
					else if($recMed['RecMed']['TIPO']=='M') echo 'Medicación';
					else echo 'No especificado';
					 ?>&nbsp;</td>
			<td><?php echo h($recMed['RecMed']['OBS_RECETA']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver Receta'), array('action' => 'view2', $recMed['RecMed']['ID_RECETA'])); ?>
			</td>
		</tr>
	<?php endforeach;
		 else: echo 'Usted No tiene recetas asociadas a atenciones';
		 endif; ?>
		</tbody>
		</table>
			<p><FONT COLOR="#229b0d"><?php
		echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en registro {:start}, terminando en {:end}')
		));
		?></FONT>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
			</div>
		<ul>
			<li><?php echo $this->Html->link(__('Atrás'), array('controller' => 'users', 'action' => 'misMascotas')); ?> </li>
		</ul>
	</div>