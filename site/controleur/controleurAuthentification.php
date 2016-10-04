<?php
require_once __DIR__."/../vue/vueAuthentification.php";


class ControleurAuthentification{
 
 private $vue;
 
 public function __construct(){
 $this->vue=new VueAuthentification();
 }
 

public function authentification(){
$this->vue->genereVueAuthentification();
}




}
