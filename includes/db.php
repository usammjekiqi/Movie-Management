<?php

$host = 'localhost';
$user = 'root';
$pass='';
$dbname = 'mmm';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DONE!";
  
  } catch (PDOException $e) {
  
    echo "Connection failed: " . $e->getMessage();
  
  }
  
