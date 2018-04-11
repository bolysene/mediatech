<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Des formations de grande qualité pour ceux qui sont pationnés par la programmation">
    <meta name="author" content="Boly Sène">
    <link rel="icon" href="../img/mediatech.png/favicon.ico">

    <title>
      <?php 
      echo  isset($title) ? $title. ' Learning By Doing'
      :  'Learning By Doing is just cool!';
      ?>
        
    </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/style.css" rel="stylesheet">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/bootstrap.min.js" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--footer elements-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

   
  </head>
  <body>
<?php 
  include'../database.php';
 ?>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top bg-info">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Média Tech Dynamique</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">ACCUEIL</a></li>
      <ul class="dropdown-menu">
        </ul>
      </li>
      <li><a href="cours.php">COURS</a></li> <!--COURS-->
    </ul>
    <ul class="nav navbar-nav navbar-right">
          <li><a href="espacemembre.php">ESPACE MEMBRE</a></li>
      <li><a href="register.php">INSCRIPTION</a></li>
    </ul>
  </div>
</nav>

    </header>