<?php
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'house_super';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
	
	$bdd = new PDO("mysql:host=localhost;dbname=house_super", $db_username, $db_password);
	
?>