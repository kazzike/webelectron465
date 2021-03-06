
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
        <script src="js/jquery.min.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->


        <script>
        function habilitar(value)
        {

            if(value=="1" || value==true)
            {
                // habilitamos
                document.getElementById("bancem").disabled=false;
                document.forms['form']['bancem'].value = '2';
            }else if(value=="2" || value==false){
                // deshabilitamos
                document.getElementById("bancem").disabled=true;
                document.forms['form']['bancem'].value = '14';
            }
        }
        
        
    </script>



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
                               <!-- <li><a href="index.">LA EMPRESA</a></li>                                          
                                <li><a href="">CONTACTO</a></li>
                                 <li><a href="#templatemo-about">SUCURSALES</a></li> -->
                                
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Reporte de Pago </span><span class="txt_orange">Electron 465</span>
                    
                </div>  
            </div>
        </div>
        
       
      
        
        <div>
<div class="container">

    <p class="txt_slogan" align="justify"><i>Para atenderte con un servicio de calidad, debes rellenar cuidadosamente el siguiente formulario, con los datos que se piden.</i></p> <p>&nbsp;</p>
<div class="row">
    <form id="form" name="form" method="POST" action="enviarreportedepago.php">
</div> 
<div class="row">
    <div class="form-group col-md-4">
       <input required="required" name="cedula" id="cedula" type="" class="form-control" placeholder="Tu Cédula..." maxlength="40" />
    </div>
    <div class="form-group col-md-4">
      <input required="required" name="correo" id="correo" type="" class="form-control" placeholder="Tu Correo..." maxlength="40" />
    </div>  
    <div class="form-group col-md-4">
      <input required="required" name="monto" id="monto" type="" class="form-control" placeholder="Monto..." maxlength="40" />
    </div>
</div>

<div class="row">

<div class="form-group col-md-4">
   <input required="required" name="fecha" id="fecha" type="date" class="form-control" placeholder="Fecha de Pago..." maxlength="40" />
</div>
<div class="form-group col-md-4">
      <select class="selete" name="tpago" id="tpago" style="width: 100%;" onchange="habilitar(this.value);">
            <option selected value="1">Tipo de Pago...</option>
            <option value="1">Transferencia</option>
            <option value="2">Depósito</option>                                       
        </select>
        </div>
<div class="form-group col-md-4">
    <input required="required" name="numref" id="numref" type="" class="form-control" placeholder="Número de Referencia..." maxlength="40" />
</div>
</div>

<div class="row">

<div class="form-group col-md-4">
      <select class="selete" name="bancem" id="bancem" style="width: 100%;" >
        <option value="2">Banco Emisor...</option>
       					        <option value="1">BICENTENARIO</option>
                                <option value="2">BOD</option>
                                <option value="3">PROVINCIAL</option>
                                <option value="4">VENEZUELA</option>
                                <option value="5">BANESCO</option> 
                                <option value="6">INDUSTRIAL</option>
                                <option value="7">FONDO COMUN</option>
                                <option value="8">100% BANCO COMERCIAL</option>
                                <option value="9">SOFITASA</option> 
                                <option value="10">DEL SUR</option>
                                <option value="11">CARONI</option>
                                <option value="12">CARIBE</option>
                                <option value="13">MERCANTIL</option> 
                                <option value="14">Por Cliente.</option>                                    
        </select>
</div>
<div class="form-group col-md-4">
      <select class="selete" name="bancrecp" id="bancrecp" style="width: 100%;">
   <option selected>Banco Receptor...</option>
    							<option>BICENTENARIO</option>
                                <option>BOD</option>
                                <option>PROVINCIAL</option>
                                <option>VENEZUELA</option>
                                <option>BANESCO</option> 
                                <option>INDUSTRIAL</option>
                                <option>FONDO COMUN</option>
                                <option>100% BANCO COMERCIAL</option>                                                           <option>SOFITASA</option> 
                                <option>DEL SUR</option>
                                <option>CARONI</option>
                                <option>CARIBE</option>
                                <option>MERCANTIL</option>                                    
        </select>
</div>
<div class="form-group col-md-4">
	<input required="required" name="conceptopago" id="conceptopago" type="" class="form-control" placeholder="Pago por concepto de..." maxlength="200" />
    
    <!-- Subir archivo digital <input value="Adjuntar Archivo" type="file"><br /><br /> 
  <select class="selete" name="conceptopago" style="width: 100%;">
	  <option selected>Pago por concepto de...</option>
		<option>INICIAL</option>
    <option>ABONO (MENSUALIDAD)</option>   
  </select>-->


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
                                    <a href="https://twitter.com/grupoelectron" target="_blank">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="#">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="https://plus.google.com/+Electron465com/about" target="_blank">
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
