<?php 


require_once 'recaptchalib.php';


// Register API keys at https://www.google.com/recaptcha/admin
$publickey = "6Lc4EgMTAAAAAFe1JflPGIDYjkMeRXOJKjiiTOsi";

# the error code from reCAPTCHA, if any
$error = null;

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Electrón 465</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Google UI CSS 
        <link rel="stylesheet" href="https://ssl.gstatic.com/docs/script/css/add-ons.css">-->
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    


    <body>
       <div class="templatemo-top-bar" id="templatemo-top">
        <div class="container">
         <div class="subheader">
              <div id="phone" class="pull-left">
                   <img src="images/phone.png" alt="phone"/>0274-2512260
              </div>
              <div id="email" class="pull-right">
                   <img src="images/email.png" alt="email"/>electron465empresa@gmail.com
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="images/logoe.png" alt="Electrón 465" title="Electrón 465" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="index.html">INICIO</a></li>
                                <li><a href="">LA EMPRESA</a></li>                                          
                                <li><a href="">CONTACTO</a></li>
                               <!--  <li><a href="#templatemo-about">SUCURSALES</a></li> -->
                                
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Bienvenido a </span><span class="txt_orange">Electron 465</span>
                    <p class="txt_slogan"><i>Descubre todos nuestros planes de créditos para solicitarlos en línea.</i></p>
                </div>	
            </div>
        </div>
        
       
      
        
        <div>
            <div class="container">


                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr  hr_gray"/><span class="txt_darkgrey">FORMULARIO DE AFILIACI&Oacute;N</span>
                            <hr class="team_hr  hr_gray"/>
                        </div>
                    </div>
				</div>
                  
				  <p class="txt_slogan" align="justify"><i><font color='black'> Si no conoces el codigo de vendedor deja ese espacio en blanco.</font></i></p> <p>&nbsp;</p>

                       <div class="row">
						 <form method="POST" action="afiliar.php">
                            
						 

                      <div class="form-group col-md-4">
                         <input maxlength="9" name="code" id="code" type="" class="form-control" placeholder="Codigo de Vendedor..." />
                      </div>
                      

                <div class="row">
                    <div class="form-group col-md-12">
                     <button name="btnenvi" id="btnenvi" type="submit" class="btn btn-orange pull-right">CONTINUAR</button>
                    </div>
                
                
                </div>
</form>
                  
                       
                   


            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->






                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->

        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                          
                                <li>
                                    <a href="#" title="0424 - 7436422">
                                        <span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="#">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="#">
                                        <span class="social-icon-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Ir al Inicio</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                        	Electrón 465 © 2015 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		<!-- templatemo 395 urbanic -->
    </body>
</html>
