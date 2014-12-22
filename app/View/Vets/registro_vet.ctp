<?php
$this->layout= 'headAdmin';

?>

<div class="container well">
	<div class="vets index">
		<FONT COLOR="#229b0d"><h3 class="text-center"><?php echo __('Veterinarios'); ?></h3></FONT>
		<br>
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>

				<th><?php echo $this->Paginator->sort('Rut'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre Completo'); ?></th>
				<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
				<th><?php echo $this->Paginator->sort('Dirección'); ?></th>
				<th><?php echo $this->Paginator->sort('E-mail'); ?></th>
				<th><?php echo $this->Paginator->sort('Fecha Registro'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($vets as $vet): ?>
		<tr>
			<td><?php echo h($vet['Vet']['RUT_VET']); ?>&nbsp;</td>
			<td><?php echo h($vet['Vet']['NOMBRE_VET']." ".$vet['Vet']['APELLIDO_MVET']." ".$vet['Vet']['APELLIDO_MVET']); ?>&nbsp;</td>
			<td><?php echo h($vet['Vet']['TEL_VET']); ?>&nbsp;</td>
			<td><?php echo h($vet['Vet']['DIR_VET']); ?>&nbsp;</td>
			<td><?php echo h($vet['Vet']['MAIL_VET']); ?>&nbsp;</td>
			<td><?php echo h($vet['Vet']['FECHA_REGISTRO_VET']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('action' => 'view2', $vet['Vet']['ID_VET'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('action' => 'edit2', $vet['Vet']['ID_VET'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<br><br><br>
		<p>
		<FONT COLOR="#229b0d"><?php
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
		<br>
	</div>
	<div class="actions">
		<h3><?php echo __('Acciones'); ?></h3>
		<div id="ex5">
		    <?php
		        echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		      ?>
		  </div>
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Veterinario'), array('action' => 'add')); ?></li>
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