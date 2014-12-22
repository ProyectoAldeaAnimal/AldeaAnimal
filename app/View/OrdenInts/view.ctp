<div class="ordenInts view">
<h2><?php echo __('Orden Int'); ?></h2>
	<dl>
		<dt><?php echo __('ID ORDEN INT'); ?></dt>
		<dd>
			<?php echo h($ordenInt['OrdenInt']['ID_ORDEN_INT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atencion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenInt['Atencion']['FECHA_ATENCION'], array('controller' => 'atencions', 'action' => 'view', $ordenInt['Atencion']['ID_ATENCION'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo De Int'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordenInt['TipoDeInt']['NOMBRE_TIPO_INT'], array('controller' => 'tipo_de_ints', 'action' => 'view', $ordenInt['TipoDeInt']['ID_TIPO_INT'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA SUGERIDA INT'); ?></dt>
		<dd>
			<?php echo h($ordenInt['OrdenInt']['FECHA_SUGERIDA_INT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MOTIVO INT'); ?></dt>
		<dd>
			<?php echo h($ordenInt['OrdenInt']['MOTIVO_INT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA ORDEN INT'); ?></dt>
		<dd>
			<?php echo h($ordenInt['OrdenInt']['FECHA_ORDEN_INT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DURACION ESTIMADA INT'); ?></dt>
		<dd>
			<?php echo h($ordenInt['OrdenInt']['DURACION_ESTIMADA_INT']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orden Int'), array('action' => 'edit', $ordenInt['OrdenInt']['ID_ORDEN_INT'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orden Int'), array('action' => 'delete', $ordenInt['OrdenInt']['ID_ORDEN_INT']), array(), __('Are you sure you want to delete # %s?', $ordenInt['OrdenInt']['ID_ORDEN_INT'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orden Ints'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orden Int'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atencions'), array('controller' => 'atencions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atencion'), array('controller' => 'atencions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo De Ints'), array('controller' => 'tipo_de_ints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo De Int'), array('controller' => 'tipo_de_ints', 'action' => 'add')); ?> </li>
	</ul>
</div>
