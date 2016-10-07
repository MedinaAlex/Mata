<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require "model/dao/Dao.php";
    require_once("./model/bean/Service.php");
    require_once("./model/bean/Utilisateur.php");

    if(isset($_SESSION['is_connected']) && ! $_SESSION['is_connected']){
        header("Location: ../../index.php");
        
    }
?>



<nav class="navbar navbar-default" style="background-color:#3366ff;width:80%;margin:auto;margin-top:50px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?controler=test&action=services" style="color:white;font-family:raleway;">Troc Monsieur</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div style="font-family:Oswald;" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="color:white;">
        <li><a href="#" style="color:white;"><i class="fa fa-user"></i>  Contact</a></li>
        </Ul>
      <ul class="nav navbar-nav navbar-right" style="color:white;">
        <li><a href="view/other/deconnexion.php" style="color:white;"><i class="fa fa-sign-out"></i>  Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="home">
    <h1>Contacter le troceur*</h1>
    <div class="container">
        <?php
            $dao = New Dao();
            $id = $_GET['id'];
            $user = $dao->getUtilisateur($id);
            echo "<h2>Nom = " . $user->getNom() ."</h2><br>";
            echo "<h2>Prenom = " . $user->getPrenom() ."</h2><br>";
            echo "<h2>Mail = " . $user->getMail() ."</h2><br>";
        ?>
    </div>   
        
    <br/><br/><br/>

</div>

<br/><br/><br/><br/>


