<?php
	//variaveis para conexão
    $localServer= 'localhost';
    $user = 'sfabrica';
    $password = 'facil123';    
    $db = 'summer_db';
    $dsn = 'mysql:host=localhost;dbname=summer_db';
    
    //via mySql
    $conecta = @mysql_connect($localServer,$user,$password) or die (mysql_error());
	$selBanco = mysql_select_db($db) or die (mysql_error());
    
    //via pdo
    $pdo = new PDO($dsn, $user, $password);
?>

