<?php

  $host = 'localhost';
  $db ='hotel';
  $user = 'root';
  $pass ='';
  $charset = 'utf8mb4';



  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try {
    $pdo = new PDO($dsn,$user,$pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    
    echo "<h1>No DB</h1>";
  }

  require_once 'crud.php';
  require_once 'user.php';
  $crud = new crud($pdo);
  $user = new user($pdo);
  
  $user -> insertUser("Admin","1a2s3d4f5g");
?> 