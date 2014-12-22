<?php 
$this->layout='heados';
?>


<div class="tipoPres index">
	<h3 class="text-center"><?php echo __('Tipos de Prestaciónes'); ?></h3>
	<br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('Nombre:'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipoPres as $tipoPre): ?>
	<tr>
	
		<td><?php echo h($tipoPre['TipoPre']['NOMBRE_TIPO_PRES']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link(__('Edtar'), array('action' => 'edit', $tipoPre['TipoPre']['ID_TIPO_PRES'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tipoPre['TipoPre']['ID_TIPO_PRES']), array(), __('Are you sure you want to delete # %s?', $tipoPre['TipoPre']['ID_TIPO_PRES'])); ?>
		</td>
	</tr>
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
		<li><?php echo $this->Html->link(__('Aregar Nuevo Tipo'), array('action' => 'add')); ?></li>
	</ul>
</div>
