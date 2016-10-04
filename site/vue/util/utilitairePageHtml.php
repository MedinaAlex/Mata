<?php

class UtilitairePageHtml{


private function itemsBandeauApresConnexion(){

        // tableaux contenant les liens d'accès et le texte à afficher
        $tab_menu_lien = array( "pop_rock", "jazz", "soul_funk_rap", "electro", "classique");
        $tab_menu_texte = array( "Pop/Rock", "Jazz", "Soul/Funk/Rap", "Electro", "Classique");
       
        // informations sur la page
       $info = pathinfo($_SERVER['PHP_SELF']);
	$menu = "<body>";
        $menu .= "\n<div id=\"menu\">\n    <ul id=\"onglets\">\n";

        

        // boucle qui parcours les deux tableaux
        foreach($tab_menu_texte as $cle=>$nom)
        {
            $menu .= "    <li";
                
            // si le nom du fichier correspond à celui pointé par l'indice, alors on l'active
            if( $info['basename'] == $nom )
                $menu .= " class=\"active\"";
                
      
                
            $menu .= "><a href=\"index.php?action=OK&id=1&genre=".$tab_menu_lien[$cle]."\">" . $tab_menu_texte[$cle] . "</a></li>\n";
        }
	
	$menu.="<li class=\"panier\"><a href=\"index.php?action=OK&id=2\"> accéder au panier</a></li>\n";
	
	$menu.="<li class=\"de\"><a href=\"index.php?action=OK&id=3\"> déconnexion</a></li>\n";
      
        $menu.= "</ul>\n</div>";
        
        // on renvoie le code xHTML
        return $menu;        
    }



private function genereEnteteHtml(){
header("Content-type: text/html; charset=utf-8");
$entete="<!DOCTYPE html>";
$entete.="<html>";
$entete.="<head>";
$entete.= "<link href=\"vue/css/menu.css\" type=\"text/css\" rel=\"stylesheet\" /> ";
$entete.="</head>";
return $entete;
}

public function genereBandeauApresConnexion(){
$entete=$this->genereEnteteHtml();
return $entete.$this->itemsBandeauApresConnexion();
}




public function generePied(){
$pied= "</body>";
$pied.= "</html>";
return $pied;
}


}

?>
