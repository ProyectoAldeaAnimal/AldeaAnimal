<?php 
 $this->layout = 'headClientes';
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

                      <!--li><a href="#features">Features</a></li-->
                      
                  </ul>

                  <ul class="nav navbar-nav navbar-right">

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Logout Usuario",
array('controller' => 'users', 'action' => 'logout')); ?>
  </FONT></li>


                       </ul> 
                            </div>
                          <!--/.navbar-collapse -->
                  </div>
              </nav




<div class="User view">
<legend><FONT COLOR="#229b0d"><h3><?php echo __('Mis Datos Personales:'); ?></h3></FONT></legend>

	<br>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su rut es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['RUT_CLI']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su nombre Completo es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['NOMBRE_CLI']); ?> <?php echo h($User['User']['APELLIDO_PCLI']); ?> <?php echo h($User['User']['APELLIDO_MCLI']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su E-mail es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['MAIL_CLI']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su teléfono es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['TEL_CLI']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Usted fue registrado el día:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['FECHA_REGISTRO_CLI']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su dirección es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($User['User']['DIR_CLI']); ?></div>
		</div>
	</legend>
	<legend>
		
		<?php 
		if($User['User']['HABILITADO_CLI'])
		echo $this->Html->div('alert alert-success', 'Usted se encuentra habilitado para usar el sistema');
		
		else echo $this->Html->div('alert alert-danger', 'Usted no se encuentra habilitado para usar el sistema');?>
	</legend>

</div>


<div  class="center-block col-md-4" style="float: none;" id="ex5">
        <?php
            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
          ?>
</div>	
