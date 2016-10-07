<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }  
 
    if(isset($_SESSION['is_connected']) && $_SESSION['is_connected']){
    
        $_SESSION['is_connected'] = false;
        header("Location: ../../index.php");
        
    }

?>
