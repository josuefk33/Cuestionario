<?php
session_start();
$fecha_antigua=$_SESSION['ultimo_ingreso'];
$hora=date("y-n-j H:i:s");
$tiempo = (strtotime($hora)-strtotime($fecha_antigua));
if($tiempo>=60)
{
  session_destroy();
  header('location:ErrorSession.html');
}
else {
  if(!isset($_SESSION['id'])&&!isset($_SESSION['apellidos_y_nombres']))
  {
    header('location:Login.php');
    die();
  }
  else {
    ?>
    
<html>
<title>ErrorSession</title>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/Responder.css">
  <link rel="stylesheet" href="css/fonts.css">
  <!--===============================USAR TODO ESTO================================================================-->
      <link rel="stylesheet" href="material desing lite/material.min.css">
      <script type="text/javascript" src="material desing lite/material.min.js"></script>
      <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
      <link rel="stylesheet" type="text/css" href="diseño/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="diseño/vendor/animate/animate.css">
      <link rel="stylesheet" type="text/css" href="diseño/vendor/css-hamburgers/hamburgers.min.css">
      <link rel="stylesheet" type="text/css" href="diseño/vendor/animsition/css/animsition.min.css">
      <link rel="stylesheet" type="text/css" href="diseño/vendor/select2/select2.min.css">
      <link rel="stylesheet" type="text/css" href="diseño/vendor/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" type="text/css" href="diseño/css/util.css">
      <link rel="stylesheet" type="text/css" href="diseño/css/main1.css">
    <!--===============================================================================================-->
</head>
<body>
  <section class="contact-wrap">
  </section>
  <!--     -->
  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form">
<br/>
<br/>
<br/>
<br/>
<?php
echo 'as';
?>
<strong>
<center>
  <span class="contact100-form-title" broder="1" align="center">
  <!--<h3>
    <P>Estimado Usuario:</p>
  </h3>
  <h2>
    <P>Su sesion ha expirado, por</p>
    <P>favor vuelva a ingresar</p>
    <P>haciendo clic <a href="Login.php">Aqui</a></p>
  </h2>
-->
  Estimado Usuario:
  <br><br>
  Su sesion ha expirado, por
  favor vuelva a ingresar
  haciendo clic <a href="Login.php">Aqui</a>
</span>
</center>
</strong>
</body>
</html>
