<?php 
 $this->layout = 'head';
?>
<div class="container"><div class="prestacions index">
	<h2><?php echo __('Prestacions'); ?></h2>
	<table cellpadding="0" cellspacing="0" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_PRES'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_TIPO_PRES'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE_PRES'); ?></th>
			<th><?php echo $this->Paginator->sort('NUMERO_BLOQUES'); ?></th>
			<th><?php echo $this->Paginator->sort('PRECIO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($prestacions as $prestacion): ?>
	<tr>
		<td><?php echo h($prestacion['Prestacion']['ID_PRES']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prestacion['TipoPrestacion']['NOMBRE_TIPO_PRES'], array('controller' => 'tipo_prestacions', 'action' => 'view', $prestacion['TipoPrestacion']['ID_TIPO_PRES'])); ?>
		</td>
		<td><?php echo h($prestacion['Prestacion']['NOMBRE_PRES']); ?>&nbsp;</td>
		<td><?php echo h($prestacion['Prestacion']['NUMERO_BLOQUES']); ?>&nbsp;</td>
		<td><?php echo h($prestacion['Prestacion']['PRECIO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prestacion['Prestacion']['ID_PRES'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prestacion['Prestacion']['ID_PRES'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prestacion['Prestacion']['ID_PRES']), array(), __('Are you sure you want to delete # %s?', $prestacion['Prestacion']['ID_PRES'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
<h3><?php echo __('Actions'); ?></h3>
<div class="btn-group-vertical" role="group">
	
		<div class="btn-group" role="group">
			<button class="button btn btn-default" ><?php echo $this->Html->link(__('New Prestacion'), array('action' => 'add')); ?></button>
		</div>
		<div class="btn-group" role="group">
			<button class="button btn btn-default"><?php echo $this->Html->link(__('List Tipo Prestacions'), array('controller' => 'tipo_prestacions', 'action' => 'index')); ?> </button>
		</div>
		<div class="btn-group" role="group">
			<button class="button btn btn-default"><?php echo $this->Html->link(__('New Tipo Prestacion'), array('controller' => 'tipo_prestacions', 'action' => 'add')); ?> </button>
		</div>
		
		
		
		
		
	
</div>
</div>

<br><br>