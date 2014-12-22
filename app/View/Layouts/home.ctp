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
<body id="home" data-spy="scroll" data-target=".navbar-fixed-top">
    
    <!--home start-->
  

  <div id="lacaeza"class="cabecera">
 

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
       <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
  
        <div class="carousel-inner">
   
               
       
        <!-- Wrapper for Slides -->
            <img src="img/logo.png" alt="" class= "img-responsive mueveIMG" style="z-index: 1;position: absolute;">
            <img src="img/horaa.png" alt="" calss="img-responsive reservaHora" style="z-index: 1;position: absolute;padding-top:350px;">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                
                    
                <div class="fill">
                         
                            
                </div>

            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill2">
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill3">
                </div>
            </div>
              
        </div>
       

  

    </header>


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
                      <li><a class= "page-scroll"href="#home"><i class="glyphicon glyphicon-home" ></i> <FONT COLOR="#FFFFFF">  Principal</FONT></a></li>                    
                      <li><a class= "page-scroll" href="#servicios"><FONT COLOR="#FFFFFF">Servicios</FONT></a></li>
                      <li><a class= "page-scroll" href="#about"><FONT COLOR="#FFFFFF">Quienes Somos</FONT></a>
                      <li><a class= "page-scroll" href="#contact"><FONT COLOR="#FFFFFF">Contacto</font></a></li>
                      <!--li><a href="#features">Features</a></li-->
                      
                  </ul>
                  <ul class="nav navbar-nav navbar-right">

                          <li style="padding-top: 15px;"><FONT COLOR="#FFFFFF"><i class="fa fa-users"></i> <?php echo $this->Html->link("Login Usuario",
array('controller' => 'users', 'action' => 'login')); ?>
  </FONT></li>

                          <li>
                            <div style="padding-top: 15px;">
                              <button id="playButton" type="button" class="btn btn-alert btn-xs" style="background:#229b0d;">
                          <span class="glyphicon glyphicon-play"></span>
                           </button>
                          <button id="pauseButton" type="button" class="btn btn-alert btn-xs"style="background:#229b0d;">
                            <span class="glyphicon glyphicon-pause"></span>
                            </button>
                            </div>
                          
                  </li>

         

                                </ul>
                            </div>
                          </div><!--/.navbar-collapse -->
                  </div>
              </nav>
        </div>
  

  

    <!--servicios start-->
<div  id="servicios"></div>

  <div class="callout">
  <div class="vert">
    <div class="col-md-12 text-center" id= "ex4"><img src="img/servicios.png" alt="" class="img-responsive center-block"></div>
    <div class="col-md-12 text-center">&nbsp;</div>
    <div class="col-md-8 col-md-offset-2">
          

<div style="text-align:center;">
      <div class="row">
        <div class="col-md-4 project ">
          <div style="text-align:center;">
            <img src="img/jeringa.png" class="img-responsive  adaptar pull-right hidden-xs hidden-sm "alt=""></div>
          <br>
          
         <legend><img src="img/est_vac.png" alt="" class="img-responsive"></legend>
          <p class="contenido"><FONT COLOR="#FFFFFF">Esterilizamos a tu mascota - Mantente informado de las vacunas para tu mejor amigo.</FONT></p>
        
        </div>
        <div class="col-md-4 project" >
          <img src="img/esteto.png " class="img-responsive img-circle adaptar hidden-xs hidden-sm center-block"alt="">

          <legend><img src="img/ex_trat.png" alt="" class="img-responsive"></legend>
          <p class="contenido"><FONT COLOR="#FFFFFF">Realizamos los examenes que tu mascota necesita, una serie de tratamientos para la patología de tu mascota y de ser necesario intervernirla.</FONT>  </p>
       
        </div>
        <div class="col-md-4 project" >
          <img src="img/prof.png" class="img-responsive hidden-xs hidden-sm center-block"alt="" style="width:60%;height:60%;">

          <legend><img src="img/ex_prof.png" alt="" class="img-responsive"></legend>
          <p class="contenido"><FONT COLOR="#FFFFFF">Contamos con execelentes veterinarios con pasión y amor por los animales.</FONT> </p>
          </div>
        </div>
      </div>
  

      </div>
        <a href="/AldeaAnimal/pres/catalogo"><div class="btn btn-success"><i class="glyphicon glyphicon-folder-open"></i> CONOCE NUESTROS SERVICIOS  </div></a>
        
    </div>

  </div>
</div>
    
    <!--about start-->    
<<<<<<< HEAD
  
        <div id="about"></div>
        <br><br>
   
          <div class="container">
            <div class="row">
              <div class="col-md-12 wwa ">
                <span name="about" ></span>
                <br>

                  <div class="col-md-12 text-center" id="ex4"><img src="img/quienesSomos.png" alt="" class="img-responsive center-block"></div>
                <img src="img/line-divider.png" alt="divider" class="img-responsive center-block adaptar2">
                <h4>"Conoce Nuestro Equipo y Nuestros Servicios Especializados"</h4>
              </div>
            </div>
          </div>
          <br>
      <div id="about">
      <div class="lineAbout">
      <div class="container">
        <div class="row Fresh">
          
=======
    
    <div id="about">
      <div class="lineAbout">
      <div class="container">
        <div class="row Fresh">
          <div class="col-md-12 text-center" id="ex4"><img src="img/quienesSomos.png" alt="" class="img-responsive center-block"></div>
>>>>>>> 1e3571fc14bea30522d993f9280f51746840295f
          <div class="col-md-4 Des">
            <i class="fa fa-heart"></i>
            <div class="contenido">
            <h4>Amor por los Animales</h4>
            <p>Como ellos lo merecen </p>
            </div>
            </div>    
          
          <div class="col-md-4 Ver">
            <i class="fa fa-paw"></i>
            <div class="contenido">
            <h4>Intervenciones especializadas</h4>
            <p>Al alcance de tu bolsillo </p>
          </div>
          </div>    
          <div class="col-md-4 Fully">
            <i class="fa fa-medkit"></i>
              <div class="contenido">
              <h4>Reserva Hora Online</h4>
              <p>No te quedes sin atencion </p>
            </div>
          </div>
          </div>        
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-12 wwa ">
          <span name="about" ></span>
          <br>
          <h1>Nuestros Especialistas</h1>
          <img src="img/line-divider.png" alt="divider" class="img-responsive center-block adaptar2">
          <h4>"Los animales son nuestros hermaos pequeños, por ende, nuestro deber es protegerlos."</h4>
        </div>
      </div>
    </div>
    <div class="container">

      <article class="row team">
                    <div class="row">
                        <div class="col-md-6 " id= "ex2">
                            <img class="img-responsive img-circle adaptar" src="img/portada.png">
                        </div>
                        <div class="col-md-6 well">
                            <legend><h4><i class="fa fa-user"> Elver Rodriguez</i></h4></legend>
                            <h5>Medico Veterinario</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, odit atque tempore id cumque, assumenda explicabo omnis suscipit optio molestias, veritatis ullam non? Molestiae quaerat soluta fugiat, officia suscipit tempora.</p>
                            <ul>
                                  <li><a href="#"><i class="fa fa-facebook-square" style="color:#0000FF"></i></a></li>
                                  <li><a href="#"><i class="fa fa-google-plus-square" style="color:#FF0000"></i></a></li>
                            </ul>
                        </div>
                      </div>

                      <div class="row">  
                        <div class="col-md-6 " id= "ex2">
                            <img class="img-responsive img-circle adaptar" src="img/veterinario.jpg">
                        </div>
                        <div class="col-md-6 well">
                            <legend><h4><i class="fa fa-user"> Eugenia Muñoz</i></h4></legend>
                            <h5>Asistente Veterinario</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis delectus, iusto tenetur. Porro esse, obcaecati, nemo aperiam est itaque earum a ipsum recusandae animi ad. Voluptas quos, inventore corporis id.</p>
                            <ul>
                                  <li><a href="#"><i class="fa fa-facebook-square" style="color:#0000FF"></i></a></li>
                                  <li><a href="#"><i class="fa fa-google-plus-square" style="color:#FF0000"></i></a></li>
                            </ul>
                        </div>
                       </div>

                      <div class="row">
                        <div class="col-md-6 " id= "ex2">
                               <img class="img-responsive img-circle adaptar" src="img/veterinario2.jpg">
                        </div>
        
                        <div class="col-md-6 well">
                                <legend><h4><i class="fa fa-user"> Maria Perez</i></h4></legend>
                                <h5>Dueño</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto fuga voluptatem nobis perferendis repellat explicabo, magni itaque dicta aut alias exercitationem et aliquam possimus illo distinctio ipsa eaque fugiat perspiciatis.</p>
                                <ul>
                                  <li><a href="#"><i class="fa fa-facebook-square" style="color:#0000FF"></i></a></li>
                                  <li><a href="#"><i class="fa fa-google-plus-square" style="color:#FF0000"></i></a></li>
                                </ul>
                        </div>
                       </div>

                        
                    </div>
                </article>
                <br>
    </div>



    <div id="contact"></div>      
    <!--contact start-->
    <div class="callout2">
      <div class="vert">
        <div class="col-md-12 text-center " id="ex4"><img src="img/cuidadoyatenicion.png" alt="" class="img-responsive center-block"></div>
          <div class="col-md-12 text-center">&nbsp;</div>
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 contenido3">
                  <fieldset><img src="img/mecere.png" alt="" class="img-responsive center-block"></fieldset>
                
                
          <p>
Clinica Veterinaria Aldea Animal brinda atención profesional y accesible 
para sus mascotas, en donde contamos con un staff exclusivo de médicos 
veterinarios y personal calificado, todos apasionados amantes de los animales y su bienestar.
          </p>
          <h3>Contactanos!</h3>
          <div id= "ex4"> <img src="img/huella2.png" alt="huella" class="img-responsive pull-right hidden-xs"></div>
          
          </div>
    </div>
  </div>
</div>    
       
    <div class="container">
      <div class="row">
  

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cont well">
          <ul>
            <li><legend><i class="fa fa-home" style="color:#AE7E45"></i> Huerfanos 1527 a pasos del metro Santa Ana</legend></li>
            <li><legend><i class="fa fa-phone" style="color:#21FF52"></i>+569 93023920</legend></li>
            <li><legend><a href="#"><i class="fa fa-envelope" style="color:#B4EF56"></i>aldeaanimal@hotmail.cl</legend></li></a>
            <li><legend><a href="#"><i class="fa fa-twitter" style="color:#1799FF"></i>Twitter</legend></li></a>
            <li><legend><a href="https://www.facebook.com/AldeaAnimal?fref=ts"><i class="fa fa-facebook-square" style="color:#0000FF"></i>Facebook</legend></li></a>
            <li><legend><a href="#"><i class="fa fa-youtube-play" style="color:#FF0000"></i>YouTube</legend></li></a>
          </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contenido2">
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1664.6931507742786!2d-70.6590788!3d-33.4392408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5af6a7bbc29%3A0x9cd4a256be5725da!2sHu%C3%A9rfanos+1527%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1409374875260" width="100%" height="400" frameborder="0" style="border:0"></iframe>     
    </div>
      </div>
    </div>

    </div>

    <div class="callout3" id="contact">
      <div class="vert">
        <div class="col-md-12 center-block" id="ex4"><img src="img/UltimaLinea.png" alt="" class="img-responsive center-block"></div>
          <div class="col-md-12 text-center">&nbsp;</div>
            
                <div class="row-fluid">
                  <div class="col-lg-6 col-md-6" ><img src="img/logo.png" alt="" class="img-responsive pull-right"></div>
                  <div class="col-lg-6 col-md-6" id="ex5"> <img src="img/huella2.png" alt="huella" class="img-responsive hidden-xs"></div>
                </div>
  </div>
</div> 
    <div class="lineFinal">
      <div class="container">
        <div class="row downLine">
          <div class="col-md-6 text-left copy">
            <p>Copyright &copy; 2014 Aldea Animal.</p>
          </div>
          <div class="col-md-6 text-right dm">
            <ul id="downMenu">
              <li class="active"><a href="#home">Principal</a></li>
              <li><a href="#servicios">Servicios</a></li>
              <li><a href="#about">Quienes Somos</a></li>
              <li class="last"><a href="#contact">Contacto</a></li>
              <!--li><a href="#features">Features</a></li-->
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>    
 
  <script>
    $('.carousel').carousel({
        interval: 3000, //changes the speed
        pause: "false"    

    });
    $('#playButton').click(function () {
     
        $('#myCarousel').carousel('cycle');
    });
    $('#pauseButton').click(function () {
        $('#myCarousel').carousel('pause');
    });



    </script>

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
