<?php
 
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'vdlp-projecten');
  
 try
 {
     $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     die("Error: Could not connect. " . $e->getMessage());
 }


$sql = 'SELECT Beschrijving, Afbeelding 
        FROM projecten
        ORDER BY ID';

$q = $pdo->prepare($sql);
$q->execute(array());
?>