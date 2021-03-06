<?php 


require_once 'recaptchalib.php';


// Register API keys at https://www.google.com/recaptcha/admin
$publickey = "6Lc4EgMTAAAAAFe1JflPGIDYjkMeRXOJKjiiTOsi";

# the error code from reCAPTCHA, if any
$error = null;

$codigo = '';
if(isset($_POST['code'])){
	$codigo = $_POST['code'];
}

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
                  <p class="txt_slogan" align="justify"><i>Para atenderte con un servicio de calidad, debes rellenar cuidadosamente el siguiente formulario, con los datos que se piden.</i></p> <p>&nbsp;</p>
				  <p class="txt_slogan" align="justify"><i><font color='black'>				  
				  Si no conoces el numero de contrato o numero de vendedor deja esos espacios en blanco.</font></i></p> <p>&nbsp;</p>

                       <div class="row">
						 <form method="POST" action="registrar_afiliacion.php">
                            <div class="form-group col-md-4">
								<select class="selete" name="naci" id="naci" style="width: 100%;">
									<option selected>Documento Identidad</option>
                                    <option>Venezolano</option>
									<option>Extranjero</option>
									<option>R.I.F.</option>
								</select>
						    </div>


                      <div class="form-group col-md-4">
                                <input maxlength="9" required="required" name="cedu" id="cedu" type="" class="form-control" placeholder="Tu Cédula o Rif..." />
                      </div>
                      <div class="form-group col-md-4">
                                <select class="selete" name="gene" id="gene" style="width: 100%;">
                                    <option selected>Tu Género</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                </select>
                      </div> 
                      </div> 
                      <div class="row">
                            <div class="form-group col-md-6">
                                    <input required="required" name="pnom" id="pnom" type="" class="form-control" placeholder="Tu Primer Nombre..." maxlength="40" />
                          </div>    
                           <div class="form-group col-md-6">
                                    <input name="snom" id="snom" type="" class="form-control" placeholder="Tu Segundo Nombre..." maxlength="40" />
                          </div>
                      </div>
                      <div class="row">

                             <div class="form-group col-md-6">
                                    <input required="required"name="pape" id="pape" type="" class="form-control" placeholder="Tu Primer Apellido..." maxlength="40" />
                          </div>    
                           <div class="form-group col-md-6">
                                    <input name="sape" id="sape" type="" class="form-control" placeholder="Tu Segundo Apellido..." maxlength="40" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-12">
                                    <input required="required" name="dire" id="dire" type="" class="form-control" placeholder="¿Dirección Fiscal?... (Tu Dirección como aparece en el R.I.F.)" maxlength="200" />
                          </div>
                            <div class="form-group col-md-4">
                                    <select required aria-required="true"  class="selete" name="esta" id="esta" style="width: 100%;">
                                        <option selected>Selecciona tu Estado</option>
                                        <option value="Amazonas">Amazonas</option>
                                        <option value="Apure">Apure</option>
                                        <option value="Aragua">Aragua</option>
                                        <option value="Anzoategui">Anzoategui</option>
                                        <option value="Barinas">Barinas</option>
                                        <option value="Bolivar">Bolivar</option>
                                        <option value="Carabobo">Carabobo</option>
                                        <option value="Cojedes">Cojedes</option>
                                        <option value="Delta">Delta Amacuro</option>
                                        <option value="Distrito">Distrito Capital</option>
                                        <option value="Falcon">Falcon</option>
                                        <option value="Guarico">Guarico</option>
                                        <option value="Lara">Lara</option>
                                        <option value="Merida">Merida</option>
                                        <option value="Merida">Monagas</option>
                                        <option value="Miranda">Miranda</option>
                                        <option value="NuevaE">Nueva Esparta</option>
                                        <option value="Portuguesa">Portuguesa</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Trujillo">Trujillo</option>
                                        <option value="Tachira">Tachira</option>
                                        <option value="Yaracuy">Yaracuy</option>
                                        <option value="Vargas">Vargas</option>
                                        <option value="Zulia">Zulia</option>
                                    </select>
                          </div>  
                           <div class="form-group col-md-4">
                                    <input required="required" name="ciud" id="ciud" type="" class="form-control" placeholder="¿En que Ciudad Vives?..." maxlength="80" />
                          </div>
                          <div class="form-group col-md-4">
                                    <input required="required" name="mail" id="mail" type="email" class="form-control" placeholder="¿Cual es tu Correo Electronico?..." maxlength="160" />
                          </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                        <input required="required" name="ncas" id="ncas" type="" class="form-control" placeholder="Tú número de teléfono (de casa)..." maxlength="40" />
                      </div>
                      <div class="form-group col-md-4">
                        <input required="required" name="ncel" id="ncel" type="" class="form-control" placeholder="Tú número de celular..." maxlength="40" />
                      </div>
                    <div class="form-group col-md-4">
                        <select class="selete" name="wazz" id="wazz" style="width: 100%;">
                            <option selected>¿Usas Whatsapp?</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                     </div>  
                  
                     </div> 
                     <div class="row">
                            <div class="form-group col-md-4">
                                <select class="selete" name="tnom" id="tnom" style="width: 100%;">
                                    <option selected>Tu Tipo de Nomina</option>
                                    <option>Pública</option>
                                    <option>Privada</option>
                                </select>
                            </div>  
                              <div class="form-group col-md-4">
                            <input required="required" name="empr" id="empr" type="" class="form-control" placeholder="Nombre de la empresa donde trabajas..." maxlength="200" />
                            </div>  
                    <div class="form-group col-md-4">
                            <select class="selete" name="banc" id="banc" style="width: 100%;">
                                <option selected>Banco donde pagan tu nomina...</option>
                                <option>BICENTENARIO</option>
                                <option>BOD</option>
                                <option>PROVINCIAL</option>
                                <option>VENEZUELA</option>
                                <option>BANESCO</option> 
                                <option>INDUSTRIAL</option>
                                <option>CAMARA MERCANTIL</option>
                                <option>CREDINFO</option>
                                <option>INVERCRESA</option>
                                <option>FONDO COMUN</option>
                                <option>100% BANCO COMERCIAL</option>
                                <option>DOMICILIACION POR OFICINA</option>
                                <option>SOFITASA</option> 
                                <option>DEL SUR</option>
                                <option>CARONI</option>
                                <option>CARIBE</option>
                                <option>MERCANTIL</option>
                                <option>NINGUNA DE LAS ANTERIORES</option>                                                                    
                            </select>
                        </div>  
                     </div>
                     <div class="row">
                            <div class="form-group col-md-12">
                            <input required="required" name="demp" id="demp" type="" class="form-control" placeholder="Direción de la empresa donde trabajas..." maxlength="200" />
                            </div>  
                     </div>
                     <div class="row">

							<div class="form-group col-md-4">
                            <input required="required" name="suel" id="suel" type="" class="form-control" placeholder="Sueldo Promedio Mensual..." maxlength="40" />
                            </div>
                       
                        <div class="form-group col-md-4">
                            <input required="required" name="mvac" id="mvac" type="" class="form-control" placeholder="¿Monto estimado a recibir en vacaciones?..." maxlength="40" />
                        </div>  
                          <div class="form-group col-md-4">
                            <input required="required" name="magu" id="magu" type="" class="form-control" placeholder="¿Monto estimado a recibir en Aguinaldos?..." maxlength="40" />
                        </div>
                        </div>
                    <div class="row">
                   
                         <div class="form-group col-md-3">
                            <input  name="twit" id="twit" type="" class="form-control" placeholder="Tu Usuario de Twitter..." maxlength="40" />
                        </div>
                         <div class="form-group col-md-3">
                            <input  name="face" id="face" type="" class="form-control" placeholder="Tu Usuario de Facebook..." maxlength="40" />
                        </div>
                                <div class="form-group col-md-3">
                            <input name="bbms" id="bbms" type="text" class="form-control" placeholder="Número de Contrato..." maxlength="40" />
                        </div>
                        <div class="form-group col-md-3">
                            <input  name="cove" id="cove" type="text" class="form-control" placeholder="Código de Vendedor..." maxlength="40" value="<?php echo $codigo?>" readonly="readonly"/>
                        </div>

                    </div>

 


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
