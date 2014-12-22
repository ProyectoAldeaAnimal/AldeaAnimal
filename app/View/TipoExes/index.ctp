<?php
$this->layout= 'head';

?>
<div class="tipoExes index">
	<h3 class= "text-center"><?php echo __('Tipos de Examen'); ?></h3>
	<br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Identificador'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th class="actions"><?php echo __('Acción'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipoExes as $tipoEx): ?>
	<tr>
		<td><?php echo h($tipoEx['TipoEx']['ID_TIPO_EX']); ?>&nbsp;</td>
		<td><?php echo h($tipoEx['TipoEx']['NOMBRE_TIPO_EX']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipoEx['TipoEx']['ID_TIPO_EX'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipoEx['TipoEx']['ID_TIPO_EX'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Tipo Ex.'), array('action' => 'add')); ?></li>
	</ul>
</div>
