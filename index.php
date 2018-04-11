<?php
  require 'partials/_header.php';
 
 $title = "ACCUEIL";
  ?>
<div class="container-fluid first-content">
    <div class="row">
    <div class="col-xs-6 col-md-8 col-lg-7">
      <div class="jumbotron">
        <h2 style="font-weight: bold;">Média Tech Dynamique ?</h2>
                  
          <p class="into img-thumbail" style="background-image: url('img/cover1.jpg'); padding: 10px 10px; color:white; line-height: 50px; height:500px;" > Média Dynamique, Agence de communication et conseil en marketing digital qui a pour vocation de proposer et de vendre des plans de communication et de marketing digital, à propos de notre service  l’agence couvre l’ensemble des besoins de communication et marketing digital
          une agence accompagne les clients grands comptes et PME de la définition de la stratégie à la mise en œuvre opérationnelle des actions de communication.Nous avons l’art graphique et l’outil technologique pour vous accompagner sur l’ensemble d’actions de votre communication.<br>

        .</p>
          <button class="btn btn-md btn-primary">Rejoigner la communauté</button>
        
      </div>
    </div>
    <div class="col-xs-6 col-md-4 col-lg-5">
      <div class="wells">
        <p>
          <br><br><br>
          <h1>Déja inscrit?<br><br> Connectez-vous!</h1>
        </p>
            <form action="video.php" method="post">
      <div class="form-group">
        <label for="email">email:</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="mdp">
      </div>
      <div class="checkbox">
        <label><input type="checkbox">Se souvenir de moi</label>
      </div>
      <button type="submit" class="btn btn-success" name="submit">Se connecter</button>
      <a href="inscription.php" style="margin-left: 15px;">Je souhaite m'inscrire</a>

    </form>
        
      </div>
    </div>
  </div>
</div>

 <?php
  require 'partials/_footer.php';
 ?> 