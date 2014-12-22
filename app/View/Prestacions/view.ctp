<div class="prestacions view">
<h2><?php echo __('Prestacion'); ?></h2>
	<dl>
		<dt><?php echo __('ID PRES'); ?></dt>
		<dd>
			<?php echo h($prestacion['Prestacion']['ID_PRES']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Prestacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prestacion['TipoPrestacion']['NOMBRE_TIPO_PRES'], array('controller' => 'tipo_prestacions', 'action' => 'view', $prestacion['TipoPrestacion']['ID_TIPO_PRES'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE PRES'); ?></dt>
		<dd>
			<?php echo h($prestacion['Prestacion']['NOMBRE_PRES']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NUMERO BLOQUES'); ?></dt>
		<dd>
			<?php echo h($prestacion['Prestacion']['NUMERO_BLOQUES']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PRECIO'); ?></dt>
		<dd>
			<?php echo h($prestacion['Prestacion']['PRECIO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prestacion'), array('action' => 'edit', $prestacion['Prestacion']['ID_PRES'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prestacion'), array('action' => 'delete', $prestacion['Prestacion']['ID_PRES']), array(), __('Are you sure you want to delete # %s?', $prestacion['Prestacion']['ID_PRES'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prestacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prestacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Prestacions'), array('controller' => 'tipo_prestacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Prestacion'), array('controller' => 'tipo_prestacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
