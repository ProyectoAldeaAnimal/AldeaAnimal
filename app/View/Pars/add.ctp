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
<div class="pars form">
<?php echo $this->Form->create('Par'); ?>
	<fieldset>
		<h3 class="text-center"><?php echo __('Agregar Nuevo Parámetro:'); ?></h3>
		<br>
	<?php
		echo $this->Form->input('TAM_BLOQUE',array(
				'label' => 'Tamaño Bloque:',
				'class' => 'form-control'

			));
		echo $this->Form->input('INICIO_VIGENCIA',array(
				'label' => 'Inicio Vigencia parámetro: <br>'
			));
		echo $this->Form->input('FIN_VIGENCIA',array(
				'label' => 'Fin Vigencia parámetro: <br>'
			));
		echo $this->Form->input('IN_SEMANA', array(
				'label' => 'Inicio Horario Semana: <br>',
				'interval' => 5,
				'timeFormat'=>'24',
			));
		echo $this->Form->input('FIN_SEMANA', array(
				'label' => 'Fin Horario Semana: <br>',
				'interval' => 5,
				'timeFormat'=>'24',
			));
		echo $this->Form->input('IN_SAB', array(
				'label' => 'Inicio Horario Sábado: <br>',
				'interval' => 5,
				'timeFormat'=>'24',
			));
		echo $this->Form->input('FIN_SAB', array(
				'label' => 'Inicio Horario Sábado: <br>',
				'interval' => 5,
				'timeFormat'=>'24',	
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar!')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>

	<div id="ex5">
		        <?php
		            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
		          ?>
		      </div>
	<ul>

		<li><?php echo $this->Html->link(__('Anterior'), array('action' => 'index')); ?></li>
	</ul>

</div>