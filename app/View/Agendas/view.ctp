<div class="agendas view">
<h2><?php echo __('Agenda'); ?></h2>
	<dl>
		<dt><?php echo __('ID AGENDA'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['ID_AGENDA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agenda['Ma']['NOMBRE_MAS'], array('controller' => 'mas', 'action' => 'view', $agenda['Ma']['ID_MAS'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agenda['Vet']['name'], array('controller' => 'vets', 'action' => 'view', $agenda['Vet']['ID_VET'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agenda['Pre']['NOMBRE_PRES'], array('controller' => 'pres', 'action' => 'view', $agenda['Pre']['ID_PRES'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESTADO AGENDA'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['ESTADO_AGENDA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agenda'), array('action' => 'edit', $agenda['Agenda']['ID_AGENDA'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agenda'), array('action' => 'delete', $agenda['Agenda']['ID_AGENDA']), array(), __('Are you sure you want to delete # %s?', $agenda['Agenda']['ID_AGENDA'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agendas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agenda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ma'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pres'), array('controller' => 'pres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pre'), array('controller' => 'pres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('controller' => 'oferta_hors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Oferta Hors'); ?></h3>
	<?php if (!empty($agenda['OfertaHor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID OFERTA HOR'); ?></th>
		<th><?php echo __('ID CAL'); ?></th>
		<th><?php echo __('ID VET'); ?></th>
		<th><?php echo __('ESTADO AGENDAMIENTO'); ?></th>
		<th><?php echo __('HORA INICIO'); ?></th>
		<th><?php echo __('HORA TERMINO'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agenda['OfertaHor'] as $ofertaHor): ?>
		<tr>
			<td><?php echo $ofertaHor['ID_OFERTA_HOR']; ?></td>
			<td><?php echo $ofertaHor['ID_CAL']; ?></td>
			<td><?php echo $ofertaHor['ID_VET']; ?></td>
			<td><?php echo $ofertaHor['ESTADO_AGENDAMIENTO']; ?></td>
			<td><?php echo $ofertaHor['HORA_INICIO']; ?></td>
			<td><?php echo $ofertaHor['HORA_TERMINO']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'oferta_hors', 'action' => 'view', $ofertaHor['ID_OFERTA_HOR'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'oferta_hors', 'action' => 'edit', $ofertaHor['ID_OFERTA_HOR'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'oferta_hors', 'action' => 'delete', $ofertaHor['ID_OFERTA_HOR']), array(), __('Are you sure you want to delete # %s?', $ofertaHor['ID_OFERTA_HOR'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Oferta Hor'), array('controller' => 'oferta_hors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
