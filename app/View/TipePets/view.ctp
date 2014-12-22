<div class="tipePets view">
<h2><?php echo __('Tipe Pet'); ?></h2>
	<dl>
		<dt><?php echo __('ID TIPO MAS'); ?></dt>
		<dd>
			<?php echo h($tipePet['TipePet']['ID_TIPO_MAS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ESPECIE'); ?></dt>
		<dd>
			<?php echo h($tipePet['TipePet']['ESPECIE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLASE'); ?></dt>
		<dd>
			<?php echo h($tipePet['TipePet']['CLASE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipe Pet'), array('action' => 'edit', $tipePet['TipePet']['ID_TIPO_MAS'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipe Pet'), array('action' => 'delete', $tipePet['TipePet']['ID_TIPO_MAS']), array(), __('Are you sure you want to delete # %s?', $tipePet['TipePet']['ID_TIPO_MAS'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipe Pets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipe Pet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
