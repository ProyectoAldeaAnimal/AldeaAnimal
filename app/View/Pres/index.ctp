<?php 
$this->layout = 'headAdmin';

?>

<div class="container well">
	<div class="pres index">
		<FONT COLOR="#229b0d"><h3 class="text-center"><?php echo __('Catálogo Prestaciones'); ?></h3></FONT>
		<br><br>
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			
				<th><?php echo $this->Paginator->sort('Tipo de Prestación'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Número de Bloques'); ?></th>
				<th><?php echo $this->Paginator->sort('Precio'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($pres as $pre): ?>
		<tr>
			
			<td>
				<?php echo $pre['TipoPre']['NOMBRE_TIPO_PRES']; ?>
			</td>
			<td><?php echo h($pre['Pre']['NOMBRE_PRES']); ?>&nbsp;</td>
			<td><?php echo h($pre['Pre']['NUMERO_BLOQUES']); ?>&nbsp;</td>
			<td><?php echo h('$'.$pre['Pre']['PRECIO']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pre['Pre']['ID_PRES'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pre['Pre']['ID_PRES'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $pre['Pre']['ID_PRES']), array(), __('Are you sure you want to delete # %s?', $pre['Pre']['ID_PRES'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<p><FONT COLOR="#229b0d">
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en registro {:start}, terminando en {:end}')
		));
		?></FONT>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
	<div class="actions">
		<h3><?php echo __('Acciones'); ?></h3>
			<div id="ex5">
			    <?php
			        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
			      ?>
			  </div>
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Prestación'), array('action' => 'add')); ?></li>	
			<li><?php echo $this->Html->link(__('Tipos de Prestación'), array('controller'=>'tipo_pres','action' => 'index')); ?></li>
		</ul>
	</div>
</div>
   <div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
        </div>
      </div>
    </div>
    </div>    