
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

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
      <a class="navbar-brand" href="index.php" style="color:white;font-family:raleway;">Troc Monsieur</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div style="font-family:Oswald;" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="color:white;">



        </Ul>
      <ul class="nav navbar-nav navbar-right" style="color:white;">
        <li><a data-toggle="modal" data-target="#Registration" style="color:white;"><i class="fa fa-user-plus"></i>  Inscription</a></li>

      <li><a data-toggle="modal" data-target="#Connexion" style="color:white;"><i class="fa fa-sign-out"></i>  Connexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="home">
    

  

<div class="container">

    <center>
  <h2 style="color:black">Bienvenue !</h2>
  <br><br>
  <div id="logo" >

    <!-- Wrapper for slides -->
    <img src="img/logo.png" width=33% height=33%>
  
  </div>   
</center>
  <br/><br/><br/>

<div class="row" style="padding-right:75px;padding-left:75px;">
<div class="col-md-4">
<h2 class="h2black"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-users fa-stack-1x fa-inverse"></i>
</span></h2>
<br/>
<h2 class="h2black">Convivial !</h2>
</div> 

<div class="col-md-4">
<h2 class="h2black"><span class="fa-stack fa-lg">
  <i class="glyphicon glyphicon-ban-circle fa-stack-2x"></i>
  <i class="fa fa-usd fa-stack-1x fa-inverse"></i>
</span></h2>
<br/>
<h2 class="h2black">Gratuit !</h2>
</div> 

<div class="col-md-4">
<h2 class="h2black"><span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
</span></h2>
<br/>
<h2 class="h2black">Pratique !</p>
</div> 
</div>
<br/><br/><p></p><i class="fa fa-space-shuttle fa-3x"></i></p></br></br>    
<div class="row" style="padding-right:50px;padding-left:50px;">
<div class="col-md-12">
<h2 class="h2black">Que faisons nous ?</h2>
<br/>
<h3>Troc Monsieur est un site collaboratif de troc de services entre particuliers. Inscrivez-vous, ou connectez-vous en quelques clics, et n'attendez plus pour troquer !</h3>
</div>     
</div>     

<br/><br/><br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-6">
          <form action="view/other/register.php" method="post" id="newmember">
                  <div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <center><div class="modal-dialog"></center>
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                          <h5 class="modal-title" id="myModalLabel" textalign="center">Inscrivez-Vous</h5>
                        </div>
                        <div class="modal-body form-inline">
                          <div class="form-group has-feedback">
                              <label class="control-label" for="firstnamelabel" name="nom">Nom</label><br/>
                              <center><input type="text" name="nom" class="form-control" id="firstnameinput" aria-describedby="firstnameinput" required="">
                              </center>
                          </div>
                          <br/>
                          <div class="form-group has-feedback">
                              <label class="control-label" for="lastnamelabel" name="prenom">Prénom</label><br/>
                              <center><input type="text" name="prenom" class="form-control" id="lastnameinput" aria-describedby="lastnameinput" required=""></center>
                          </div>
                          <br/>
                          <div class="form-group has-feedback">
                              <label class="control-label" for="emaillabel" name="mail">Adresse Mail</label><br/>
                              <center><input type="email" name="mail" class="form-control" id="emailinput" aria-describedby="emailinput" required=""></center>
                          </div>
                          <br/>
                          <div class="form-group has-feedback">
                              <label class="control-label" for="passwordlabel" name="password">Mot de Passe</label><br/>
                              <center><input type="password" name="password" class="form-control" id="passwordinput" aria-describedby="passwordinput" required="">
                              </center>
                          </div>
                          <br/>
                          <div class="form-group has-feedback">
                              <label class="control-label" for="re-enterpasswordlabel">Confirmer Mot de Passe</label><br/>
                              <center><input type="password" class="form-control" id="re-enterpasswordinput" aria-describedby="re-enterpasswordinput" required=""></center>
                              
                          </div>
                          <br/>
                          <div class="form-group has-feedback">
                              <label class="control-label" for="postcodelabel" name="birthdate">Date de Naissance</label>
                              <center><input type="text" class="form-control" name="birthdate" id="postcodeinput" aria-describedby="postcodeinput" name="birthdate" value="YYYY/MM/DD"></center>
                          </div>                
                          <br/><br/>
                           <div class="form-group">
                             <input type="submit" class="btn btn-primary" value="Valider l'inscription">
                           </div>
                          
                        </div><!-- end modal-Body -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </


                  - end become a member modal -->
</form> <!-- end Form -->
<form action="./view/other/connexion.php" method="post" id="member">
        <div class="modal fade" id="Connexion" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <center><div class="modal-dialog"></center>
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                <h5 class="modal-title" id="myModalLabel" textalign="center">Connectez-Vous</h5>
              </div>
              <div class="modal-body form-inline">
                <div class="form-group has-feedback">
                    <label class="control-label" for="firstnamelabel" name="mail">Adresse Mail</label><br/>
                    <center><input type="text" class="form-control" name="mail" id="firstnameinput" aria-describedby="firstnameinput" required="">
                    </center>
                </div>
                <br/>
                <div class="form-group has-feedback">
                    <label class="control-label" for="lastnamelabel" name="password">Mot de Passe</label><br/>
                    <center><input type="password" class="form-control" name="password" id="lastnameinput" aria-describedby="lastnameinput" required=""></center>
                </div>
                <br/>
                <br/><br/>
                 <div class="form-group">
                   <input type="submit" class="btn btn-primary" value="Se Connecter">
                 </div>
                
              </div><!-- end modal-Body -->
              
            </div>
          </div>
        </div><!-- end become a member modal -->
</form> <!-- end Form -->        


