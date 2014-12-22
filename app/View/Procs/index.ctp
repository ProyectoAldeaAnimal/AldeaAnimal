<?php 
$this->layout = "headClientes";
?>

<div class="procs index">
	<h3 class="text-center"><?php echo __('Procedimientos'); ?></h3>
	<br>
	<h4><i class="glyphicon glyphicon-ok"></i> Precione la fecha de anteción para más detalles</h4>
	<br>
	<table cellpadding="0" cellspacing="0">

	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Número de Procedimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha Atención'); ?></th>
			<th><?php echo $this->Paginator->sort('Observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha siguiente procedimiento'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procs as $proc): ?>
	<?php 	foreach ($mas as $ma): ?>
			<?php if($proc['Atencion']['ID_MAS']==$ma['Ma']['ID_MAS']):	?>
	<tr>
		<td><?php echo h($proc['Proc']['ID_PROC']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proc['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view2', $proc['Atencion']['ID_ATENCION'])); ?>
		</td>
		<td><?php echo h($proc['Proc']['OBS_PROC']); ?>&nbsp;</td>
		<td><?php echo h($proc['Proc']['FECHA_SGTE_PROC']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proc['Proc']['ID_PROC'])); ?>
			
		
		</td>
	</tr>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en registro {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
  	</div>
	<ul>
		<li><?php echo $this->Html->link(__('Atrás'), array('controller'=>'users','action' => 'misMascotas')); ?></li>
	</ul>
</div>
