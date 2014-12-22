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
                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/homeVet"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Administración - Veterinario</FONT></a></li>                    
                      <!--li><a href="#features">Features</a></li-->
                    
                  </ul>
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
<div class="container">


	
	
		<div class="text-center">
		<h1><FONT COLOR="#229b0d"><?php echo __('Agregar Oferta Horaria para un Veterinario'); ?></FONT></h1>
	
	
	</div>
	<div class="pull-right"id="ex5">
	        <?php
	            echo $this->Html->image('esteto.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
	          ?>
	          <?php 
						
						$usuario = AuthComponent::user();
						$user[$usuario[0]['Vet']['ID_VET']] = $vets[$usuario[0]['Vet']['ID_VET']];
				
					?>
  	</div>
  	<h2>Seleccione Rango de Fechas</h2>
	<br>

	<?php echo $this->Form->create('OfertaHor', array('action' => 'agregarOfertaHoraria')); ?>
			<table>
				<tr>
					<?php echo $this->Form->input('ID_VET', array('label' => 'Usted es:', 'class' => 'form-control','options' => $user)); ?>			
				</tr>
			</table>
			<table>
				<tr>

					<td>

						<?php
							 		
							echo $this->Form->input('varDate', array('label'=>'Desde lunes:','class' => 'form-control', 'options' => $cals,'div' => 'col col-md-6',
								'selected' =>array($primerDia)
							));?>
					</td>
					  <td>

	
				</tr>
			
			
			</table>
		
			<table>
				<tr>
					<td><div class="btn btn-default">LUNES</div></td>
					<td><div class="btn btn-default">MARTES</div></td>
					<td><div class="btn btn-default">MIERCOLES</div></td>
					<td><div class="btn btn-default">JUEVES</div></td>
					<td><div class="btn btn-default">VIERNES</div></td>
					<td><div class="btn btn-default">SABADO</div></td>
				</tr>
				<tr>
					<td>
						<?php echo $this->Form->input('LUN', array(
							'label'=>'De:   ',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected' =>array('hour'=>''.$parametros[0]['par']['IN_SEMANA'].'')
						))?>
						<?php echo $this->Form->input('LUN2', array(
							'label'=>'Hasta:',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected'=>array('hour'=>''.$parametros[0]['par']['FIN_SEMANA'].'')
						
						));?>
					</td>
					<td>
						<?php echo $this->Form->input('MAR', array(
							'label'=>'De:   ',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected' =>array('hour'=>''.$parametros[0]['par']['IN_SEMANA'].'')
						))?>				
						<?php echo $this->Form->input('MAR2', array(
							'label'=>'Hasta:',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected'=>array('hour'=>''.$parametros[0]['par']['FIN_SEMANA'].'')
						
						));?>
					</td>
					<td>
						<?php echo $this->Form->input('MIER', array(
							'label'=>'De:   ',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected' =>array('hour'=>''.$parametros[0]['par']['IN_SEMANA'].'')
						))?>
						
						<?php echo $this->Form->input('MIER2', array(
							'label'=>'Hasta:',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected'=>array('hour'=>''.$parametros[0]['par']['FIN_SEMANA'].'')
						
						));?>
					</td>
					<td>
						<?php echo $this->Form->input('JUE', array(
							'label'=>'De:   ',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected' =>array('hour'=>''.$parametros[0]['par']['IN_SEMANA'].'')
						))?>						
						<?php echo $this->Form->input('JUE2', array(
							'label'=>'Hasta:',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected'=>array('hour'=>''.$parametros[0]['par']['FIN_SEMANA'].'')
						
						));?>
					</td>
					<td>
						<?php echo $this->Form->input('VI', array(
							'label'=>'De:   ',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected' =>array('hour'=>''.$parametros[0]['par']['IN_SEMANA'].'')
						))?>				
						<?php echo $this->Form->input('VI2', array(
							'label'=>'Hasta:',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected'=>array('hour'=>''.$parametros[0]['par']['FIN_SEMANA'].'')
						
						));?>		
					</td>
					<td>
						<?php echo $this->Form->input('SAB', array(
							'label'=>'De:   ',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected' =>array('hour'=>''.$parametros[0]['par']['IN_SAB'].'')
						));?>
						<?php echo $this->Form->input('SAB2', array(
							'label'=>'Hasta:',
							'type' => 'time',
							'timeFormat'=>'24',
							'interval' => $parametros[0]['par']['TAM_BLOQUE'],
							'selected' =>array('hour'=>''.$parametros[0]['par']['FIN_SAB'].'')
						));?>
					</td>
				</tr>
			</table>

		 <?php echo $this->form->end('Listo'); ?>

</div>
