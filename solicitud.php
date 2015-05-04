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
                             <li><a href="index.html">PAGINA PRINCIPAL</a></li>
                            <!--  <li><a href="#templatemo-blog">LA EMPRESA</a></li>                                          
                             <li><a href="#templatemo-contact"></a></li>    -->                          
                              <li><a href="prefec.html">PREGUNTAS FRECUENTES</a></li> 
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
                    <p class="txt_slogan"><i>Descubra todos nuestros planes de financiamiento para solicitarlos en línea.</i></p>
                </div>	
            </div>
        </div>
        
       
      
        
        <div>
            <div class="container">

				
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <span class="txt_darkgrey">Recuerda que para que tu solicitud sea procesada por el sistema debes estar registrado a través del modulo de                            
                            afiliación en la página principal y haber confirmado tu correo eléctronico.</span><br>
                        </div>
                    </div>
				</div>
                  <p class="txt_slogan" align="justify"><i>Para atenderte con un servicio de calidad, debes rellenar cuidadosamente el siguiente 
                  formulario, con los datos que se piden.</i></p> 

                  <p class="txt_slogan" align="justify"><i>Si no conoces el código de vendedor puedes dejar ese espacio en blanco.</i></p> <p>&nbsp;</p>

                      <form method="POST" action="enviarcorreo.php"> 
                      <div class="row">
                        <div class="form-group col-md-4">
                            <input  name="ced" id="ced" type="" class="form-control" placeholder="Cedula del Cliente..." maxlength="40" />
                        </div>
                          
                          <div class="form-group col-md-4">
                                    <input required="required" name="mail" id="mail" type="email" class="form-control" placeholder="¿Cual es tu Correo Electronico?..." maxlength="160" />
                          </div>
                   
                        <div class="form-group col-md-4">
                            <input  name="cove" id="cove" type="" class="form-control" placeholder="Código de Vendedor..." maxlength="40" />
                        </div>
                        
                    </div>

                    <!-- MOTOS-->
                    <?php
                    echo '<input type=hidden name="modelo" value="'. $_GET ['metodo'] . '">';
                    
if($_GET['metodo'] =='moto'){
echo '     <div class="row">
                        <div class="form-group col-md-6">
                                <select class="selete" name="tmot" id="tmot" style="width: 100%;">
                                    <option selected>Tipo de Moto</option>
                                    <option>Moto Nueva</option>
                                    <option>Moto Usada</option>
                                </select>
                            </div> 
                               <div class="form-group col-md-6">
                                <select class="selete" name="cvel" id="cvel" style="width: 100%;">
                                    <option selected>Caja de Velocidades</option>
                                    <option>Automatica</option>
                                    <option>Sincronica</option>
                                </select>
                            </div> 
                    </div>'; 

 
}
else {
	echo '<input type=hidden name="tmot" value=""><input name="cvel" type="hidden" value="">';
}
?>

<?php
if($_GET['metodo'] =='libre'){
echo '       <div class="row">
                        <div class="form-group col-md-12">
                                <select class="selete" name="mont" id="mont" style="width: 100%;">
                                    <option selected>Monto a Solicitar</option>
                                    <option>5.000 Bs.</option>
                                    <option>10.000 Bs.</option> 
                                    <option>15.000 Bs.</option>
                                    <option>20.000 Bs.</option>
                                    <option>25.000 Bs.</option> 
                                    <option>30.000 Bs.</option>
                                </select>
                            </div> 
                    </div>  '; 

 
}
else {
	echo '<input type=hidden name="mont" value="">';
}
?>

<?php
if($_GET['metodo'] =='articulo'){
echo ' <div class="row">
                        <div class="form-group col-md-12">
                                <select class="selete" name="arti" id="arti" style="width: 100%;">
                                    <option selected>¿Que Articulo deseas solicitar?</option>
                                    <option>Celular</option>
                                    <option>Laptop</option>
                                    <option>Nevera</option>
                                    <option>Cocina</option>
                                    <option>Lavadora</option>
                                    <option>Equipo de Sonido</option>
                                    <option>Aire Acondicionado</option>
                                </select>
                            </div> 
                    </div>'; 

 
}
else {
	echo '<input type=hidden name="arti" value="">';
}
?>


				<div class="row">
                    <div class="form-group col-md-12">
						<?php echo recaptcha_get_html($publickey, $error);?>                		    
                     
                    </div>                                
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                     <button name="btnenvi" id="btnenvi" type="submit" class="btn btn-orange pull-right">ENVIAR</button>
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
