<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "coord.mitokali@uvp.mx";
    $email_subject = utf8_decode("Solicitud de cotización a traves de www.mitokali.com");

	$error_message = '';
    
     
    function died($error) {
        // your error code can go here
        echo "Lo sentimos mucho, pero hemos detectado un error al tratar de enviar su mensaje. ";
        echo "Los errores aparecen abajo:<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor regrese y evite los errores.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(
        !isset($_POST['nombre']) ||
        !isset($_POST['telefono']) ||
        !isset($_POST['email']) ||
        !isset($_POST['evento']) ||
        !isset($_POST['lugar']) ||
        !isset($_POST['fecha']) ||
        !isset($_POST['comentario'])) {
        died('Lo sentimos pero tenemos un inconveniente para enviar su mensaje. Por favor comuníquese vía telefónica.');      
    }
     
    $nombre = $_POST['nombre']; // required
    $telefono = $_POST['telefono']; // required
    $email_from = $_POST['email']; // required
    $evento = $_POST['evento']; // required
    $lugar = $_POST['lugar']; // required
    $fecha = $_POST['fecha']; // required
    $comentario = $_POST['comentario']; // required
     

  if(strlen($comentario) < 2) {
    $error_message .= 'Su descripci&oacuten del evento es muy peque&ntildea.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Detalles de la solicitud de cotización: <br>";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
	  $email_message .= "Nombre: ".clean_string($nombre)."<br>";
    $email_message .= "Teléfono: ".clean_string($telefono)."<br>";
    $email_message .= "Email: ".clean_string($email_from)."<br>";
    $email_message .= "Evento: ".clean_string($evento)."<br>";
    $email_message .= "Lugar del evento: ".clean_string($lugar)."<br>";
    $email_message .= "Fecha del evento: ".clean_string($fecha)."<br>";
    $email_message .= "Comentarios: ".clean_string($comentario)."<br>";               

//create email headers
$headers = ' From: '.$email_from." ".($nombre)."\r\n".
'Reply-To: '.$email_from."\r\n";
require("correo.php");
                
                $correo =  new correo();
                $correo->Enviar($email_to,$email_from,$nombre,$email_subject,$email_message,$headers);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
<title>Contacto | Mitokali Eventos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/dark-theme.css" rel="stylesheet" media="screen" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="skins/tango/skin.css" />
</head>

<body>
<!--Wrapper Start-->
<div id="wrapper"> 
  <!--Header Start-->
  <header id="header"> <!--<span class="icon-dish"></span>-->
    <div class="container">
      <div class="row-fluid">
        <div class="span3">
          <div class="logo"><a href="index.html"><img src="images/logo-img.png" alt="Eventos Mitokali" title="Eventos Mitokali"></a></div>
        </div>
        <div class="span9 margin-non pull-right">
          <div class="top-container">
            <div class="span12">
              <h3 class="slogan">Creando momentos memorables</h3>
            </div>
            </div>
          <div class="navbar navbar-inverse nav-bar">
            <div class="navbar-inner nav-bar-inner">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <div class="nav-collapse collapse top-nav">
                <ul class="nav">
                  <li class="dropdown"> <a class="dropdown-toggle" href="index.html"> Inicio </a> </li>
                  <li class="dropdown"> <a class="dropdown-toggle" href="servicios.html" > Servicios </a>                    
                  </li>
                  <li class="dropdown"> <a class="dropdown-toggle" href="galeria.html" > Galería </a>
                  </li>
                  <li class="dropdown active"> <a class="dropdown-toggle" href="contacto.html"> Contáctanos </a>
                  </li>
                </ul>
              </div>
              <!--/.nav-collapse --> 
            </div>
            <!-- /.navbar-inner --> 
          </div>
          <!--Nav End--> 
        </div>
      </div>
    </div>
  </header>
  <section id="banner" class="height">
    <div class="contact-banner"><img src="images/contacto/banner-contacto.jpg" alt="img"></div>
  </section>

  <section id="content_Wrapper" class="mbtm">

    <section class="container container-fluid">

      <section class="row-fluid">

        <section class="span12 error-page">
        <div class="span6">

          <h2 class="slogan">Gracias por su solicitud</h2>

          <p style="color:#fff;">Hemos recibido su solicitud. Nos comunicaremos con usted lo más pronto posible.</p>
        </div>
        <div class="span6">
        <img src="images/logo-img.png">
        </div>

        </section>

      </section>

    </section>

  </section>
    <!--Footer Area Start-->
  <footer id="footer">
    <div class="row-fluid">
      <section class="footer-section-3">
        <div class="container">
          <div class="span6">
            <div class="copy-section"><strong class="copy">2016-2017 MITOKALI EVENTOS | SERVICIO PARA TODO TIPO DE EVENTOS.</strong></div>
          </div>
          <div class="span6">
            <div class="footer-social-box">
              <ul>
                <li class="social-icon-1"><a href="https://www.facebook.com/Eventos.Mitokali/" target="_blank">facebook</a></li>
                <li class="social-icon-2"><a href="https://twitter.com/even_mitokali" target="_blank">twitter</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--Footer Section Section 3 End--> 
    </div>
  </footer>
  <!--Footer Area End-->

  <!-- End of 404 page-->


<!-- jQuery -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
<!--
function delayer(){
    window.location = "<?php echo $_SERVER['HTTP_REFERER']; ?>"
}
//-->
</script>
<script src="js/html5.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/excanvas.js"></script> 
<script src="js/jquery.bxslider.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript">// <![CDATA[
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37416898-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
// ]]></script>
</body>
</html>
<?php
}
?>