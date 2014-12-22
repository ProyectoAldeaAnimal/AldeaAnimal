 <?php
  $this->layout= 'head';

 ?>
 <nav class = "navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class ="navbar-header">
                <button type= "button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class= "sr-only">Cambiar Navegacion</span>
             	           <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                </button> 
                <a  class= "navbar-brand"><FONT COLOR="#FFFFFF"><i class="fa fa-paw"></i> Aldea Animal </FONT></a>  
            </div>
            <div class="container m1 menu">
              <div class= "collapse navbar-collapse navbar-ex1-collapse">
                  <ul  class ="nav navbar-nav subMenu" >
                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/homeAdministrador"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Administración</FONT></a></li>                    
                      <!--li><a href="#features">Features</a></li-->
                    
                  </ul>
            </div>
          </div><!--/.navbar-collapse -->
  </div>
</nav>
<div class="pars index">
	<h3 class= "text-center"><?php echo __('Parámetros'); ?></h3>
	<br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('Tamaño Bloque'); ?></th>
			<th><?php echo $this->Paginator->sort('Inicio Vigencia'); ?></th>
			<th><?php echo $this->Paginator->sort('Fin Vigencia'); ?></th>
			<th><?php echo $this->Paginator->sort('Inicio Horario Semana'); ?></th>
			<th><?php echo $this->Paginator->sort('Fin Horario Semana'); ?></th>
			<th><?php echo $this->Paginator->sort('Inicio Horario Sábado'); ?></th>
			<th><?php echo $this->Paginator->sort('Fin Horario Sábado'); ?></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($pars as $par): ?>
	<tr>
	
		<td><?php echo h($par['Par']['TAM_BLOQUE']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['INICIO_VIGENCIA']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['FIN_VIGENCIA']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['IN_SEMANA']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['FIN_SEMANA']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['IN_SAB']); ?>&nbsp;</td>
		<td><?php echo h($par['Par']['FIN_SAB']); ?>&nbsp;</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando en registro {:start}, terminando en {:end}')
	));
	?>	</p>
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
		<li><?php echo $this->Html->link(__('Nuevo Parámetro'), array('action' => 'add')); ?></li>

	</ul>
	<p><?php echo $this->Html->div('alert alert-danger', 'De momento no se pueden modificar parámetros');?></p>
</div>
