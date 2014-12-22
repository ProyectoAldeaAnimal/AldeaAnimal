<?php 
 $this->layout = 'head';
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

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Logout Vet",
								array( 'action' => 'logout')); ?>
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
			<div class="col col-md-6"><?php echo h($Vet['Vet']['RUT_VET']); ?></div>
		</div>	
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su nombre Completo es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['NOMBRE_VET']); ?> <?php echo h($Vet['Vet']['APELLIDO_PVET']); ?> <?php echo h($Vet['Vet']['APELLIDO_MVET']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su E-mail es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['MAIL_VET']); ?></div>
		</div>
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su teléfono es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['TEL_VET']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Usted fue registrado el día:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['FECHA_REGISTRO_VET']); ?></div>
		</div>
		
		
		
	</legend>
	<legend>
		<div class="row">
			<div class="col col-md-6"><button class='btn btn-default'><?php echo __('Su dirección es:'); ?></button></div>
			<div class="col col-md-6"><?php echo h($Vet['Vet']['DIR_VET']); ?></div>
		</div>
	</legend>
	<legend>
		
		<?php 
		if($Vet['Vet']['HABILITADO'])
		echo $this->Html->div('alert alert-success', 'Usted se encuentra habilitado para usar el sistema');
		
		else echo $this->Html->div('alert alert-danger', 'Usted no se encuentra habilitado para usar el sistema');?>
	</legend>

</div>


<div  class="center-block col-md-4" style="float: none;" id="ex5">
        <?php
            echo $this->Html->image('logo.png', array('alt' => 'logo', 'class'=>"img-responsive"));
          ?>
</div>	
d