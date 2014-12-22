<div class="ofertaHors index">
	<h2><?php echo __('Oferta Hors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID_OFERTA_HOR'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_CAL'); ?></th>
			<th><?php echo $this->Paginator->sort('RUT_VET'); ?></th>
			<th><?php echo $this->Paginator->sort('ESTADO_AGENDAMIENTO'); ?></th>
			<th><?php echo $this->Paginator->sort('HORA_INICIO'); ?></th>
			<th><?php echo $this->Paginator->sort('HORA_TERMINO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ofertaHors as $ofertaHor): ?>
	<tr>
		<td><?php echo h($ofertaHor['OfertaHor']['ID_OFERTA_HOR']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ofertaHor['Cal']['FECHA_CAL'], array('controller' => 'cals', 'action' => 'view', $ofertaHor['Cal']['ID_CAL'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ofertaHor['Vet']['RUT_VET'], array('controller' => 'vets', 'action' => 'view', $ofertaHor['Vet']['RUT_VET'])); ?>
		</td>
		<td><?php echo h($ofertaHor['OfertaHor']['ESTADO_AGENDAMIENTO']); ?>&nbsp;</td>
		<td><?php echo h($ofertaHor['OfertaHor']['HORA_INICIO']); ?>&nbsp;</td>
		<td><?php echo h($ofertaHor['OfertaHor']['HORA_TERMINO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ofertaHor['OfertaHor']['ID_OFERTA_HOR'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ofertaHor['OfertaHor']['ID_OFERTA_HOR'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ofertaHor['OfertaHor']['ID_OFERTA_HOR']), array(), __('Are you sure you want to delete # %s?', $ofertaHor['OfertaHor']['ID_OFERTA_HOR'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cals'), array('controller' => 'cals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cal'), array('controller' => 'cals', 'action' => 'add')); ?> </li>
	</ul>
</div>
