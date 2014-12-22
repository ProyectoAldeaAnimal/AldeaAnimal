<div class="tipoPrestacions view">
<h2><?php echo __('Tipo Prestacion'); ?></h2>
	<dl>
		<dt><?php echo __('ID TIPO PRES'); ?></dt>
		<dd>
			<?php echo h($tipoPrestacion['TipoPrestacion']['ID_TIPO_PRES']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE TIPO PRES'); ?></dt>
		<dd>
			<?php echo h($tipoPrestacion['TipoPrestacion']['NOMBRE_TIPO_PRES']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Prestacion'), array('action' => 'edit', $tipoPrestacion['TipoPrestacion']['ID_TIPO_PRES'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Prestacion'), array('action' => 'delete', $tipoPrestacion['TipoPrestacion']['ID_TIPO_PRES']), array(), __('Are you sure you want to delete # %s?', $tipoPrestacion['TipoPrestacion']['ID_TIPO_PRES'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Prestacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Prestacion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
