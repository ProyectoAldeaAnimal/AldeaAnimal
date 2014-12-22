<!DOCTYPE html>
<html lang="en" style= "background-color: #229b0d;">
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
        echo $this->Html -> css(array("signin.css"));
        echo $this->Html-> script(array("jquery-1.8.3.min.js"));
        echo $this->Html-> script(array("ie-emulation-modes-warning.js"));
        echo $this->Html-> script(array("jquery.Rut.js"));
        echo $this->Html-> script(array("bootstrap.min.js"));
        echo $this->Html-> script(array("ie10-viewport-bug-workaround.js"));
        echo $this->Html -> css(array("sweet-alert.css"));
        echo $this->Html-> script(array("sweet-alert.js"));
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
<body>
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
  <body class= "callout6">
  <div class = "container well">
   
    <div>

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
    </div>

</div>
 <div id="footer" class= "lineFinal footer">
      <div class="container">
             <div class="row downLine">
              <div >
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
        </div>
      </div>
    </div>               

  </body>

</html>

