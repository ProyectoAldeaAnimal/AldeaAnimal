<?php echo $this->Html->docType('html5');?>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Aldea Animal
	</title>
	<?php

		echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon'));
		
		echo $this->Html->css (array('reset','style','fonts','http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700'));
    echo $this->Html -> css(array("cake.generic.css"));
		echo $this->Html -> css(array("bootstrap.css"));
		echo $this->Html -> css(array("font-awesome.css"));
		echo $this->Html -> css(array("main.css"));
		echo $this->Html -> css(array("style.css"));
		echo $this->Html -> css(array("style2.css"));
		echo $this->Html -> css(array("full-slider.css"));
		echo $this->Html-> script(array("jquery-1.8.3.min.js"));
		echo $this->Html-> script(array("jquery.mobile.customized.min.js"));
		echo $this->Html-> script(array("jquery.easing.1.3.js"));
		echo $this->Html-> script(array("bootstrap.min.js"));
		echo $this->Html-> script(array("scrolling-nav.js"));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  <style type="text/css">   
a:link   
{   
 text-decoration:none;   
}   
</style>
</head>
<body id="home" data-spy="scroll" data-target=".navbar-fixed-top" class= "callout3">
  

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
                      <li><a class= "page-scroll"href="/AldeaAnimal/users/homeCliente"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Principal</FONT></a></li>                    
                      <li><a class= "page-scroll" href="/AldeaAnimal/users/misDatos"><FONT COLOR="#FFFFFF">Mis Datos</FONT></a></li>
                      <li><a class= "page-scroll" href="/AldeaAnimal/users/misMascotas"><FONT COLOR="#FFFFFF"><i class="fa fa-paw"></i> Mis Mascotas</FONT></a>
                      
                      <!--li><a href="#features">Features</a></li-->
                      
                  </ul>

                  <ul class="nav navbar-nav navbar-right">

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Logout Usuario",
array('controller' => 'users', 'action' => 'logout')); ?>
  </FONT></li>


                       </ul> 
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
        </div>
      
 

  <div class="container well ">
    <br>
    <div id= "ex2">
          <?php
            echo $this->Html->image('PP-Clientes.png', array('alt' => 'clientes', 'class'=>"img-responsive center-block"));
          ?>
        </div>
    <br>
    
    <FONT COLOR="#229b0d"> <h3><i class="glyphicon glyphicon-user"></i> Dueño: <?php
    $usuario = AuthComponent::user();
    echo ($usuario[0]['User']['NOMBRE_CLI']. ' '. $usuario[0]['User']['APELLIDO_PCLI']. ' '. $usuario[0]['User']['APELLIDO_MCLI']);?></h3></FONT>

    <br>

    <div class="row">
      <div class="col-md-9">
              <a href="/AldeaAnimal/users/misDatos"><button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Mis Datos</h3>
              Revise sus datos personales - Modifique sus Datos
               </button>
                <br>
               <a href="/AldeaAnimal/users/misMascotas"><button type="button" class="btn btn-lg btn-primary btn-block color13"> <h3>Mis Mascotas</h3>
              Revise atenciones, vacunas y desparacitaciones sobre tus queridas mascotas
               </button></a>
        
      </div>
      <div id="ex5"class="col-md-3">
        <?php
            echo $this->Html->image('huella2.png', array('alt' => 'clientes', 'class'=>"img-responsive"));
          ?>
      </div>
    </div>

    <br><br><br><br>

  </div>
<br>
 <div id="footer" class= "lineFinal footer">
      <div class="container">
             <div class="row downLine">
              <div >
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
        </div>
      </div>
    </div>
  


	<?//php echo $this->element('sql_dump'); ?>
</body>
</html>
