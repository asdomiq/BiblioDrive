<?php
    require_once('user_connection.php');
    if(!isset($_SESSION["connexion"]) || !$_SESSION["connexion"] || $_SESSION["connexionData"]["profil"] !== "Administrateur"){
    	 header("Location: http://".$_SERVER["HTTP_HOST"]."/Portfolio/BiblioDrive/index.php");
    }
?>