<?php
$this->layout= 'head';

?>
<div class="tipoDeInts index">
	<h3 class="text-center"><?php echo __('Tipo De Intervenciones'); ?></h3>
	<table cellpadding="0" cellspacing="0">
	<br>	
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Identificador'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipoDeInts as $tipoDeInt): ?>
	<tr>
		<td><?php echo h($tipoDeInt['TipoDeInt']['ID_TIPO_INT']); ?>&nbsp;</td>
		<td><?php echo h($tipoDeInt['TipoDeInt']['NOMBRE_TIPO_INT']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipoDeInt['TipoDeInt']['ID_TIPO_INT'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipoDeInt['TipoDeInt']['ID_TIPO_INT'])); ?>

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
		<li><?php echo $this->Html->link(__('Nuevo Tipo de Int.'), array('action' => 'add')); ?></li>
	</ul>
</div>
