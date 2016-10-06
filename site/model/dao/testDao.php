<?php
header("Content-type: text/html; charset=utf-8");
// vous ne devez rien modifier dans ce script qui vous permet de tester votre classe Dao

require "Dao.php";


function testGetListeAlbum($dao, $type){
    $listeService=$dao->getListeServiceByType($type);
    if ($listeService!=null){
        foreach ($listeService as $service){
            echo $service->getnom()." ".$service->getdescription();
            echo "<br/>";
        }
    }
    else{
        echo "le type $type n'existe pas";
    }
}

function testGetAlbum($dao,$id){
    $service=$dao->getService($id);
    if ($service!=null){
        echo $service->getnom()." ".$service->getdescription();
    }
    else{ echo "le service d'identifiant $id n'existe pas";}
}

function testGetMotDePasse($dao,$login){
    if ($dao->getMotDePasse($login)!=null){
        echo "le mot de passe associé à $login est: ";
        echo $dao->getMotDePasse($login)."<br/><br/>";}
        else{ 
            echo "pas de mots de passe pour $login";
        }
    }



    function testVerifieMotDePasse($dao,$login,$mdp){
        if ($dao->verifieMotDePasse($login,$mdp)){
            echo "OK $login $mdp <br/>";
        }
        else{
            echo "NO $login $mdp <br/>";
        }
    }

    function testInsert($dao, $nom, $description, $dureeminutes, $type, $categorie){
        $dao->insertService($nom, $description, $dureeminutes, $type, $categorie);
    }

    function testUser($dao, $nom, $prenom, $datenaissance, $mail, $motdepasse){
        $dao->insertUtilisateur($nom, $prenom, $datenaissance, $mail, $motdepasse);
    }

    try{
        $dao=new Dao();

        /*testInsert($dao, "Demande de ménage", "je veux que quelqu'un vienne faire le ménage chez moi 2 heures", 120, "Demande", "Menage");
        testInsert($dao, "Demande d'aide au devoir", "je veux apprendre le ", 14, "Proposition", "Course");
        testInsert($dao, "devoir", "proposition d'aide au devoir", 60, "Proposition", "Aide Devoir");
        testInsert($dao, "Menage", "proposition de ménage", 120, "Proposition", "Menage");
        testInsert($dao, "Course", "proposition de dépannge", 14, "Proposition", "Depannage");
        testInsert($dao, "Course", "Demande de course", 14, "Demande", "Course");
        testInsert($dao, "devoir", "demande d'aide au devoir", 60, "Demande", "Aide Devoir");
        testInsert($dao, "Menage", "Demande de ménage", 120, "Demande", "Menage");
        testInsert($dao, "Course", "Demande de dépannage", 14, "Demande", "Depannage");*/
        echo "######################################### <br/>";
        echo "test de getListeService <br/>";
        echo "######################################### <br/> <br/>";
        $type="demande";
        testGetListeAlbum( $dao, $type);
        echo "<br/>";
        echo "<br/>";
        $type="proposition";
        testGetListeAlbum($dao, $type);
        echo "<br/>";
        echo "<br/>";
        echo "######################################### <br/>";
        echo "test de getService <br/>";
        echo "######################################### <br/> <br/>";
        $id=1;
        testGetAlbum($dao,$id);
        echo "<br/>";
        echo "<br/>";

        $id=30;
        testGetAlbum($dao,$id);
        echo "<br/>";
        echo "<br/>";
        echo "######################################### <br/>";
        echo "test de getMotDePasse <br/>";
        echo "######################################### <br/> <br/>";
        $login="jean.saisrien@epsi.nope";
        testGetMotDePasse($dao,$login);

        $login="jean.saisrien@espi.fr";
        testGetMotDePasse($dao,$login);



        echo "<br/> <br/>";

        echo "######################################### <br/>";
        echo "test de verifieMotDePasse <br/>";
        echo "######################################### <br/> <br/>";
        $login="jean.michel@gmail.com";
        $mdp="passDeMichel";

        testVerifieMotDePasse($dao,$login,$mdp);

        $login="alex.medina@epsi.fr";
        $mdp="monPass";

        testVerifieMotDePasse($dao,$login,$mdp);

        echo "<br/> <br/>";

        echo "######################################### <br/>";
        echo "test de insertService <br/>";
        echo "######################################### <br/> <br/>";
        echo "c'est bon";
        //testInsert($dao, "insertion", "test une insertion", 1, "Demande", "Autre");

        echo "<br/> <br/>";

        echo "######################################### <br/>";
        echo "test de insertUser <br/>";
        echo "######################################### <br/> <br/>";
        echo "c'est bon";
        //testUser($dao, "Alex", "Medina", "1996-05-02", "alex.medina@epsi.fr", "monPass");
    }

    catch (ConnexionException $e){
        echo "problème de connexion";
    }
    catch (AccesTableException $e){
        echo "problème de d'acces à une table";
    }

?>
