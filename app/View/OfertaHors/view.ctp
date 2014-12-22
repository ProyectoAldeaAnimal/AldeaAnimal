<div class="ofertaHors view">
<h2><?php echo __('Oferta Hor'); ?></h2>
	<dl>
		<dt><?php echo __('ID OFERTA HOR'); ?></dt>
		<dd>
			<?php echo h($ofertaHor['OfertaHor']['ID_OFERTA_HOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ofertaHor['Cal']['FECHA_CAL'], array('controller' => 'cals', 'action' => 'view', $ofertaHor['Cal']['ID_CAL'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ofertaHor['Vet']['RUT_VET'], array('controller' => 'vets', 'action' => 'view', $ofertaHor['Vet']['RUT_VET'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESTADO AGENDAMIENTO'); ?></dt>
		<dd>
			<?php echo h($ofertaHor['OfertaHor']['ESTADO_AGENDAMIENTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HORA INICIO'); ?></dt>
		<dd>
			<?php echo h($ofertaHor['OfertaHor']['HORA_INICIO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HORA TERMINO'); ?></dt>
		<dd>
			<?php echo h($ofertaHor['OfertaHor']['HORA_TERMINO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Oferta Hor'), array('action' => 'edit', $ofertaHor['OfertaHor']['ID_OFERTA_HOR'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Oferta Hor'), array('action' => 'delete', $ofertaHor['OfertaHor']['ID_OFERTA_HOR']), array(), __('Are you sure you want to delete # %s?', $ofertaHor['OfertaHor']['ID_OFERTA_HOR'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta Hor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cals'), array('controller' => 'cals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cal'), array('controller' => 'cals', 'action' => 'add')); ?> </li>
	</ul>
</div>
