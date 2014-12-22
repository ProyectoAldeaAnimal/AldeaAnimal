<!DOCTYPE html>
<html lang="en" class="color12">
  <head>
      <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $title_for_layout?>
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
       
        echo $this->Html-> script(array("jquery-1.8.3.min.js"));
        echo $this->Html-> script(array("ie-emulation-modes-warning.js"));
        echo $this->Html-> script(array("bootstrap.min.js"));
        echo $this->Html-> script(array("ie10-viewport-bug-workaround.js"));
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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class='callout4'>
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
                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/homeVet"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">Home Veterinario</FONT></a></li> 

                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/miAgenda"><FONT COLOR="#FFFFFF">  Mi Agenda</FONT></a></li> 
                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/atencion"><FONT COLOR="#FFFFFF">  Generar Atención </FONT></a></li> 
                      <li><a class= "page-scroll"href="/AldeaAnimal/users/add"><FONT COLOR="#FFFFFF">  Registrar Cliente</FONT></a></li>
                      <li><a class= "page-scroll"href="/AldeaAnimal/mas/add"><FONT COLOR="#FFFFFF">  Registrar Mascota</FONT></a></li>
                      <li><a class= "page-scroll"href="/AldeaAnimal/vets/administracion_vet"><FONT COLOR="#FFFFFF">  Administración</FONT></a></li>                                             
                      <!--li><a href="#features">Features</a></li-->
                    
                  </ul>
                                   <ul class="nav navbar-nav navbar-right">

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Logout",
                            array('controller' => 'vets', 'action' => 'logout')); ?>
                              </FONT></li>


                       </ul> 
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
  <?php echo $content_for_layout ?>
</body>

              



</html>

