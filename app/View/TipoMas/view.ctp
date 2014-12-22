<div class="tipoMas view">
<h2><?php echo __('Tipo Ma'); ?></h2>
	<dl>
		<dt><?php echo __('ID TIPO MAS'); ?></dt>
		<dd>
			<?php echo h($tipoMa['TipoMa']['ID_TIPO_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESPECIE'); ?></dt>
		<dd>
			<?php echo h($tipoMa['TipoMa']['ESPECIE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLASE'); ?></dt>
		<dd>
			<?php echo h($tipoMa['TipoMa']['CLASE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Ma'), array('action' => 'edit', $tipoMa['TipoMa']['ID_TIPO_MAS'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Ma'), array('action' => 'delete', $tipoMa['TipoMa']['ID_TIPO_MAS']), array(), __('Are you sure you want to delete # %s?', $tipoMa['TipoMa']['ID_TIPO_MAS'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Mas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Ma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mas'), array('controller' => 'mas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mas'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mas'); ?></h3>
	<?php if (!empty($tipoMa['Mas'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID MAS'); ?></th>
		<th><?php echo __('ID TIPO MAS'); ?></th>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('NOMBRE MAS'); ?></th>
		<th><?php echo __('RAZA MAS'); ?></th>
		<th><?php echo __('FECHA NACIMIENTO'); ?></th>
		<th><?php echo __('SEXO'); ?></th>
		<th><?php echo __('COLOR'); ?></th>
		<th><?php echo __('CARACTERISTICA'); ?></th>
		<th><?php echo __('FECHA DEFUNCION'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoMa['Mas'] as $mas): ?>
		<tr>
			<td><?php echo $mas['ID_MAS']; ?></td>
			<td><?php echo $mas['ID_TIPO_MAS']; ?></td>
			<td><?php echo $mas['ID']; ?></td>
			<td><?php echo $mas['NOMBRE_MAS']; ?></td>
			<td><?php echo $mas['RAZA_MAS']; ?></td>
			<td><?php echo $mas['FECHA_NACIMIENTO']; ?></td>
			<td><?php echo $mas['SEXO']; ?></td>
			<td><?php echo $mas['COLOR']; ?></td>
			<td><?php echo $mas['CARACTERISTICA']; ?></td>
			<td><?php echo $mas['FECHA_DEFUNCION']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mas', 'action' => 'view', $mas['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mas', 'action' => 'edit', $mas['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mas', 'action' => 'delete', $mas['id']), array(), __('Are you sure you want to delete # %s?', $mas['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mas'), array('controller' => 'mas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
