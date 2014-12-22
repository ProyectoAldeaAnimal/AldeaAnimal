<div class="pets view">
<h2><?php echo __('Pet'); ?></h2>
	<dl>
		<dt><?php echo __('ID MAS'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['ID_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipe Pet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pet['TipePet']['CLASE'], array('controller' => 'tipe_pets', 'action' => 'view', $pet['TipePet']['ID_TIPO_MAS'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pet['User']['NOMBRE_CLI'], array('controller' => 'users', 'action' => 'view', $pet['User']['RUT_CLI'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE MAS'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['NOMBRE_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RAZA MAS'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['RAZA_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA NACIMIENTO'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['FECHA_NACIMIENTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SEXO'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['SEXO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('COLOR'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['COLOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CARACTERISTICA'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['CARACTERISTICA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FECHA DEFUNCION'); ?></dt>
		<dd>
			<?php echo h($pet['Pet']['FECHA_DEFUNCION']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pet'), array('action' => 'edit', $pet['Pet']['ID_MAS'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pet'), array('action' => 'delete', $pet['Pet']['ID_MAS']), array(), __('Are you sure you want to delete # %s?', $pet['Pet']['ID_MAS'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pet'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipe Pets'), array('controller' => 'tipe_pets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipe Pet'), array('controller' => 'tipe_pets', 'action' => 'add')); ?> </li>
	</ul>
</div>
