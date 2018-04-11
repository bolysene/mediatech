<?php
require'partials/_header.php'; 
?>
<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=mediatech', 'root', 'jesuisnee21091');

session_start();



if(isset($_POST['submit'])) {
   $mailconnect = htmlspecialchars($_POST['email']);
   $mdpconnect = sha1($_POST['mdp']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location:video.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<div style="padding: 200px 0px; background-color:lightblue;" class="row">
	<div class="col-md-4">
		<p>
			<h2>Cours HTML & CSS</h2>
			<h3 style="color: red">Niveau débutant</h3>
		</p>
		<div class="video-container">
			<iframe width="250" height="200" src="https://www.youtube.com/embed/TlQbEWHt3pY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

			<iframe width="250" height="200" src="https://www.youtube.com/embed/TlQbEWHt3pY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-md-4">
		<p>
			<h2>Cours PHP & SQL</h2>
			<h3 style="color: red">Niveau Intermédiaire</h3>
		</p>
		<div class="video-container embed-responsive-16by9">
			<iframe width="250" height="200" src="https://www.youtube.com/embed/TlQbEWHt3pY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<iframe width="250" height="200" src="https://www.youtube.com/embed/wOoyj711EnQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-md-4">
		<p>
			<h2>JAVA & RUBY</h2>
			<h3 style="color: red">Niveau Avancé</h3>
		</p>
		<div class="video-container">
			<iframe width="250" height="200" src="https://www.youtube.com/embed/TlQbEWHt3pY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<iframe width="250" height="250" src="https://www.youtube.com/embed/VU_f2HJAP5A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</div>
