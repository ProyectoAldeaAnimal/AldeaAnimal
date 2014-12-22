<?php
$this->layout= 'head';

?>
<div class="pats index">
	<h3 class= "text-center"><?php echo __('Administración de Patologías'); ?></h3>
	<br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Identificador'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('Gravedad'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pats as $pat): ?>
	<tr>
		<td><?php echo h($pat['Pat']['ID_PAT']); ?>&nbsp;</td>
		<td><?php echo h($pat['Pat']['NOMBRE_PAT']); ?>&nbsp;</td>
		<td><?php echo h($pat['Pat']['TIPO_PAT']); ?>&nbsp;</td>
		<td><?php echo h($pat['Pat']['GRAVEDAD_PAT']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pat['Pat']['ID_PAT'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pat['Pat']['ID_PAT'])); ?>
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
	<div id="ex5">
	    <?php
	        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
	      ?>
	  </div>
</div>
