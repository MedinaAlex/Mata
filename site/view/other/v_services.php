<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $path = $_SERVER['DOCUMENT_ROOT'];
    require($path."/model/dao/Dao.php");
    require_once($path."/model/bean/Service.php");
    require_once($path."/model/bean/Utilisateur.php");

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
        <li><a data-toggle="modal" data-target="#addService" style="color:white;"><i class="fa fa-plus"></i>  Ajouter un service</a></li>
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
    
   <h1>Selectionnez le service dont vous avez besoin</h1>

  

<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>   
    
<br/><br/><br/>

<div class="container"> 
    <div class="row">

        <div class="col-md-10">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">Dépannage</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">Aide Devoir</a></li>
                            <li><a href="#tab3primary" data-toggle="tab">Ménage</a></li>
                            <li><a href="#tab4primary" data-toggle="tab">Course</a></li>
                            <li><a href="#tab5primary" data-toggle="tab">Autre</a></li>
                            <li><a href="#tabAddService" data-toggle="tab">Mes services</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">  <div class="row">
    <div class="span">
            <table class="table table-striped table-responsive">
                  <thead class="th">
                  <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Durée</th>                                       
                  </tr>
              </thead>   
              <tbody>
              <?php
                $dao = New Dao();
                $services = $dao->getListeServiceByCategorie("Depannage");
                if ($services!=null){
                    foreach ($services as $service){
                        echo "<tr>";
                            echo "<td>" . $service->getNom(). "</td>";
                            echo "<td>".$service->getDescription()."</td>";
                            echo "<td>".$service->getType()."</td>";
                            echo "<td>".$service->getCategorie()."</td>";
                            echo "<td>".$service->getDuree()."</td>";
                            echo '<td><a class="btn btn-primary" href="index.php?controler=contact&action=contact&id='.$service->getId_user().'" role="button">Contacter</a></td>';                                      
                        echo "</tr>";
                    }
                }
              ?>
                                               
              </tbody>
            </table>
            </div>
  </div>
</div>
                        <div class="tab-pane fade" id="tab2primary"><div class="row">
    <div class="span">
            <table class="table table-striped table-responsive">
                  <thead class="th">
                  <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Durée</th>                                       
                  </tr>
              </thead>   
              <tbody>
              <?php
                $dao = New Dao();
                $services = $dao->getListeServiceByCategorie("Aide Devoir");
                if ($services!=null){
                    foreach ($services as $service){
                        echo "<tr>";
                            echo "<td>" . $service->getNom() . "</td>";
                            echo "<td>".$service->getDescription()."</td>";
                            echo "<td>".$service->getType()."</td>";
                            echo "<td>".$service->getCategorie()."</td>";
                            echo "<td>".$service->getDuree()."</td>";
                            echo '<td><a class="btn btn-primary" href="index.php?controler=contact&action=contact&id='.$service->getId_user().'" role="button">Contacter</a></td>';                                       
                        echo "</tr>";
                    }
                }
              ?>                    
              </tbody>
            </table>
            </div>
  </div></div>
                        <div class="tab-pane fade" id="tab3primary"><div class="row">
    <div class="span">
            <table class="table table-striped table-responsive">
                  <thead class="th">
                  <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Durée</th>                                       
                  </tr>
              </thead>   
              <tbody>
              <?php
                $dao = New Dao();
                $services = $dao->getListeServiceByCategorie("Menage");
                if ($services!=null){
                    foreach ($services as $service){
                        echo "<tr>";
                            echo "<td>" . $service->getNom() . "</td>";
                            echo "<td>".$service->getDescription()."</td>";
                            echo "<td>".$service->getType()."</td>";
                            echo "<td>".$service->getCategorie()."</td>";
                            echo "<td>".$service->getDuree()."</td>";
                            echo '<td><a class="btn btn-primary" href="index.php?controler=contact&action=contact&id='.$service->getId_user().'" role="button">Contacter</a></td>';                                      
                        echo "</tr>";
                    }
                }
              ?>                            
              </tbody>
            </table>
            </div>
  </div></div>
                        <div class="tab-pane fade" id="tab4primary"><div class="row">
    <div class="span">
            <table class="table table-striped table-responsive">
                  <thead class="th">
                  <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Durée</th>                                       
                  </tr>
              </thead>   
              <tbody>
              <?php
                $dao = New Dao();
                $services = $dao->getListeServiceByCategorie("Course");
                if ($services!=null){
                    foreach ($services as $service){
                        echo "<tr>";
                            echo "<td>" . $service->getNom() . "</td>";
                            echo "<td>".$service->getDescription()."</td>";
                            echo "<td>".$service->getType()."</td>";
                            echo "<td>".$service->getCategorie()."</td>";
                            echo "<td>".$service->getDuree()."</td>"; 
                            echo '<td><a class="btn btn-primary" href="index.php?controler=contact&action=contact&id='.$service->getId_user().'" role="button">Contacter</a></td>';                                     
                        echo "</tr>";
                    }
                }
              ?>                              
              </tbody>
            </table>
            </div>
  </div></div>
                        <div class="tab-pane fade" id="tab5primary"><div class="row">
    <div class="span">
            <table class="table table-striped table-responsive">
                  <thead class="th">
                  <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Durée</th>                                       
                  </tr>
              </thead>   
              <tbody>
              <?php
                $dao = New Dao();
                $services = $dao->getListeServiceByCategorie("Autre");
                if ($services!=null){
                    foreach ($services as $service){
                        echo "<tr>";
                            echo "<td>" . $service->getNom() . "</td>";
                            echo "<td>".$service->getDescription()."</td>";
                            echo "<td>".$service->getType()."</td>";
                            echo "<td>".$service->getCategorie()."</td>";
                            echo "<td>".$service->getDuree()."</td>";
                            echo '<td><a class="btn btn-primary" href="index.php?controler=contact&action=contact&id='.$service->getId_user().'" role="button">Contacter</a></td>';                                       
                        echo "</tr>";
                    }
                }
              ?>                           
              </tbody>
            </table>
            </div>
  </div></div>

   <div class="tab-pane fade" id="tabAddService"><div class="row">
    <div class="span">
            <table class="table table-striped table-responsive">
                  <thead class="th">
                  <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Durée</th>                                       
                  </tr>
              </thead>   
              <tbody>
              <?php
                $dao = New Dao();
                $id_user = $_SESSION['id_user'];
                $services = $dao->getListeServiceById($id_user);
                if ($services!=null){
                    foreach ($services as $service){
                        echo "<tr>";
                            echo "<td>".$service->getNom()."</td>";
                            echo "<td>".$service->getDescription()."</td>";
                            echo "<td>".$service->getType()."</td>";
                            echo "<td>".$service->getCategorie()."</td>";
                            echo "<td>".$service->getDuree()."</td>";
                            echo '<td><a class="btn btn-primary" href="index.php?controler=contact&action=contact&id='.$service->getId_user().'" role="button">Contacter</a></td>';                                       
                        echo "</tr>";
                    }
                }
              ?>                           
              </tbody>
            </table>
            </div>
  </div></div>

                        

                   

<br/><br/><br/><br/>


<form action="./view/other/addService.php" method="post" id="addservice">
        <div class="modal fade" id="addService" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <center><div class="modal-dialog"></center>
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                <h5 class="modal-title" id="myModalLabel" textalign="center">Ajouter un Nouveau Service !</h5>
              </div>
              <div class="modal-body form-inline">
                <div class="form-group has-feedback">
                    <label class="control-label" for="nom" >Nom</label><br/>
                    <center><input type="text" class="form-control" id="lastnameinput" aria-describedby="lastnameinput" required="" name="nom"></center>
                </div>
                <br/><br/>
                <div class="form-group has-feedback">
                    <label class="control-label" for="description" >Description</label><br/>
                    <center><input type="text" class="form-control" id="firstnameinput" aria-describedby="firstnameinput" required="" name="description" value="Sans commentaire">
                    </center>
                </div>
                <br/><br/>
                <div class="form-group has-feedback">
                    <label class="control-label" for="type">Type</label><br/>
                    <div class="controls">
                      <label class="radio inline" for="radios-0">
                        <input type="radio" name="type" id="radios-0" value="Proposition">
                        Je propose un service 
                      </label>
                      <br/>
                      <label class="radio inline" for="radios-1">
                        <input type="radio" name="type" id="radios-1" value="Demande">
                         Je demande un service
                      </label>
                    </div>
                </div>
                <br/><br/>
                <div class="form-group has-feedback">
                    <label class="control-label" for="categorie">Categorie</label><br/>
                    <div class="list-group">
                    <SELECT name="categorie">
                        <OPTION value="Aide Devoir">Aide Devoir</OPTION>
                        <OPTION value="Menage">Menage</OPTION>
                        <OPTION value="Course">Course</OPTION>
                        <OPTION value="Depanage">Depanage</OPTION>
                        <OPTION value="Autre">Autre</OPTION>
                    </SELECT>
                    </div>
                </div>
                <br/>
                <div class="form-group has-feedback">
                  <div class="control-group">
                    <label class="control-label" for="textarea">Duree</label>
                    <div class="controls">
                      <input type="textarea" id="textarea" name="duree" value="approximative en min">
                    </div>
                  </div>
                </div>
                <br/>
                <br/><br/>
                 <div class="form-group">
                   <input type="submit" class="btn btn-primary" value="Créer le service">
                   <input type="reset" class="btn btn-primary" value="Annuler">
                 </div>
                
              </div><!-- end modal-Body -->
              
            </div>
          </div>
        </div><!-- end become a member modal -->
</form>



<script>
Bootsnipp
Tools 
Snippets 
Register
Login

"Homepage"
Bootstrap 3.3.0 Snippet by Amjido
3.3.0 jQuery
PreviewHTMLCSSJS    Fork this  905   0 Fav  


1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
$(document).ready(function(){
    
    var clickEvent = false;
    $('#myCarousel').carousel({
        interval:   4000    
    }).on('click', '.list-group li', function() {
            clickEvent = true;
            $('.list-group li').removeClass('active');
            $(this).addClass('active');     
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.list-group').children().length -1;
            var current = $('.list-group li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.list-group li').first().addClass('active'); 
            }
        }
        clickEvent = false;
    });
})
$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
    $('#myCarousel .list-group-item').outerHeight(triggerheight);
});
Similar snippets: See More
477  0 
HomePage


205  0 
Homepage


977  3 
User HomePage


761  1 
Admin HomePage


Comments:

 Follow @bootsnipp  Tweet
Bootsnipp.com © 2015 Dan's Tools | Site Privacy policy | Advertise | Featured snippets are MIT license.

$(function () {
    /* BOOTSNIPP FULLSCREEN FIX */
    if (window.location == window.parent.location) {
        $('#back-to-bootsnipp').removeClass('hide');
    }
    
    
    $('[data-toggle="tooltip"]').tooltip();
    
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location = "http://bootsnipp.com/iframe/4l0k2";
    });
    $('a[href="#cant-do-all-the-work-for-you"]').on('click', function(event) {
        event.preventDefault();
        $('#cant-do-all-the-work-for-you').modal('show');
    })
    
    $('[data-command="toggle-search"]').on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('hide-search');
        
        if ($(this).hasClass('hide-search')) {        
            $('.c-search').closest('.row').slideUp(100);
        }else{   
            $('.c-search').closest('.row').slideDown(100);
        }
    })
    
    $('#contact-list').searchable({
        searchField: '#contact-list-search',
        selector: 'li',
        childSelector: '.col-xs-12',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});

</script>
