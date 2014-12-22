<?php
$this->layout = 'layoutVacio'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $title_for_layout?>
  </title>
      <?php

        echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon'));
        
        echo $this->Html->css (array('reset','style','fonts','http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700'));
        echo $this->Html -> css(array("bootstrap.css"));
        echo $this->Html -> css(array("font-awesome.css"));
        echo $this->Html -> css(array("main.css"));
        echo $this->Html -> css(array("style.css"));
        echo $this->Html -> css(array("style2.css"));
        echo $this->Html -> css(array("signin.css"));
        echo $this->Html -> css(array("sweet-alert.css"));
        echo $this->Html-> script(array("jquery-1.8.3.min.js"));
        echo $this->Html-> script(array("ie-emulation-modes-warning.js"));
        echo $this->Html-> script(array("jquery.Rut.js"));
        echo $this->Html-> script(array("bootstrap.min.js"));
        echo $this->Html-> script(array("ie10-viewport-bug-workaround.js"));
        echo $this->Html-> script(array("sweet-alert.js"));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
      ?>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! --sweet-alert.jsjs"></script><![endif]-->
  
    <!-- ta malo eso -->


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
                      <li><a class= "page-scroll"href="/AldeaAnimal/"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Principal</FONT></a></li>                    
                      <!--li><a href="#features">Features</a></li-->
                    
                  </ul>
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>


    <div class="callout4">
      <div class="form-signin login-box" role="form">
        <div id= "ex4">
        <?php
            echo $this->Html->image('logo.png', array('alt' => 'Logo', 'class'=>"img-responsive"));
          ?>
        </div>
        <div id= "ex5">
          <?php
            echo $this->Html->image('sigin.png', array('alt' => 'sigin', 'class'=>"img-responsive"));
          ?>
        </div>
        <br>



        <div class="users form">
              <?php echo $this->Session->flash('auth'); ?>
              <?php echo $this->Form->create('Vet', array('action'=>'login', 'type'=>'post')); ?>
              <fieldset>
                   
                    <?php echo $this->Form->input('RUT_VET',array('label'=>"",'type'=>'text','class'=>"form-control required rut", 'placeholder'=>"Rut", 'id'=>"rutVet", 'required autofocus' ));
                    echo $this->Form->input('PASSWORD_VET',array('label'=>"",'type'=>'password','class'=>"form-control", 'placeholder'=> "Password", 'required'));

                    $langs = array('Administrador' => 'Administrador', 'Veterinario' => 'Veterinario');
                    ?>
                    
                    <?php
                    echo $this->Form->input('rol', array(
                                      'label'=>"",  
                                      'type' => 'select',
                                      'options' => $langs,
                                      'class'=> 'form-control',
                                      'selected' => 'Veterinario'
                                  )
                      );
                    ?>
                 
                      

                      <?php echo $this->Form->input('Entrar',array('label'=>"",'type'=>'submit','class'=>"btn btn-lg btn-primary btn-block"));?>
                      <?php echo $this->Form->end();
                    ?>
              </fieldset>
            
            <?php
                      /*echo $this->Form->input('username',array('label'=>"",'type'=>'text','class'=>"form-control required rut", 'placeholder'=>"Rut", 'name'=>"rut", 'id'=>"rut", 'required autofocus' )); 
                      echo $this->Form->input('password',array('label'=>"",'type'=>'password','class'=>"form-control", 'placeholder'=> "Password", 'required')); ?>
                      <?php echo $this->Form->input('Entrar',array('label'=>"",'type'=>'submit','class'=>"btn btn-lg btn-primary btn-block"));?>
                      <?php echo $this->Form->end();*/?>
        
                  </fieldset>

          </div>


    </div> <!-- /container -->

    <div class="lineFinal">
          <div class="container">
            <div class="row downLine">
              <div class="col-md-6 text-left copy">
                <p>Copyright &copy; 2014 Aldea Animal.</p>
              </div>
              <div class="col-md-6 text-right dm">
              </div>
            </div>
          </div>
        </div>
    <script>
          $('#rutVet').Rut({
            on_error: function(){swal(" Rut Incorrecto!", "Debe contener puntos y guiones", "error");
            
          }

          });
    </script>
  </body>
  