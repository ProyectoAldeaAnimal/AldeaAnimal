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
                      <li><a class= "page-scroll"href="#home"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Administración - Veterinario</FONT></a></li>                    
                      <!--li><a href="#features">Features</a></li-->
                    
                  </ul>
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
<div class="ofertaHors form">
<?php echo $this->Form->create('OfertaHor'); ?>
	<fieldset>
		<legend><?php echo __('Add Oferta Hor'); ?></legend>
	<?php
	
		echo $this->Form->input('ID_CAL', array('class' => 'form-control', 'options' => $cals));
		echo $this->Form->input('RUT_VET', array('class' => 'form-control','options' => $vets));
		echo $this->Form->input('ESTADO_AGENDAMIENTO',array('label'=>'Estado Agendamiento','class' => 'form-control', 'options' => array('P' => 'Pendiente', 'A' => 'Aprobada','R' => 'Rechazada')));
		echo $this->Form->input('HORA_INICIO');
		echo $this->Form->input('HORA_TERMINO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Oferta Hors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vets'), array('controller' => 'vets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vet'), array('controller' => 'vets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cals'), array('controller' => 'cals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cal'), array('controller' => 'cals', 'action' => 'add')); ?> </li>
	</ul>
</div>
