<?php
$this->layout= 'head';

?>
<div class="farmacos index">
	<h3 class="text-center"><?php echo __('Farmacos'); ?></h3>
	<br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Identificador'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Laboratorio'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre Genérico'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($farmacos as $farmaco): ?>
	<tr>
		<td><?php echo h($farmaco['Farmaco']['ID_FAR']); ?>&nbsp;</td>
		<td><?php echo h($farmaco['Farmaco']['NOMBRE_FARMACO']); ?>&nbsp;</td>
		<td><?php echo h($farmaco['Farmaco']['LABORATORIO_MEDICAMENTO']); ?>&nbsp;</td>
		<td><?php echo h($farmaco['Farmaco']['NOMBRE_GENERICO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $farmaco['Farmaco']['ID_FAR'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $farmaco['Farmaco']['ID_FAR'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
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
		<li><?php echo $this->Html->link(__('Nuevo Fármaco'), array('action' => 'add')); ?></li>
	</ul>
</div>
