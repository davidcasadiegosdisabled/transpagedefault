<!DOCTYPE html>
<html lang="es">
<head>
  <title>Trans Bolívares</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/default.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!-- Fonst Google -->
	<link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- css whatsapp -->
  <link rel="stylesheet" href="css/whatsapp.css">
    

<link rel="stylesheet" href="plugins/slider-back/superslides.css">
</head>
<body style="height:1500px">


<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top default" style="position:absolute; width: 100%; position: fixed; background-color: rgba(0.94, 0.33, 0.31, 0.6) !important;">
  <a class="navbar-brand" href="#">
    <img src="img/logos/logo.png" class="margintop--12" alt="" width="150" height="60"/>
  </a>
  <ul class="navbar-nav ">
    <li class="nav-item" style="border: 1px solid white; border-radius: 5px; padding-left: 5px; padding-right: 5px; margin: 3px;">
      <a class="nav-link" href="#cont-colombia" style="color: white;">Colombia</a>
    </li>
    <li class="nav-item" style="border: 1px solid white; border-radius: 5px; padding-left: 5px; padding-right: 5px; margin: 3px;">
      <a class="nav-link" href="#cont-peru" style="color: white;">Perú</a>
    </li>
  </ul>
</nav>

<?php include ('plugins/slider-back/slider.php');?>

<?php include ('div-colombia.php');?>

<!-- Widget Whatsapp -->
<?php include('widget-whatsapp.php');?>

<script src="plugins/slider-back/javascripts/jquery.easing.1.3.js"></script>
<script src="plugins/slider-back/javascripts/jquery.animate-enhanced.min.js"></script>
<script src="plugins/slider-back/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function() {
      $('#slides').superslides({
        hashchange: true,
        play: 5000
      });

      $('#slides').on('mouseenter', function() {
        $(this).superslides('stop');
        console.log('Stopped')
      });
      $('#slides').on('mouseleave', function() {
        $(this).superslides('start');
        console.log('Started')
      });
    });
  </script>
</body>
</html>


