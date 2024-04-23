<?php
  $host = "localhost";  
  $dbname = "loginapp"; 
  $username = "root";  
  $password = "";  

  $conn = null;


  // This section checks whether the connection to the database was successful or not
 try 
  {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connection established successfully";
  } catch(PDOException $e) 
  {
    echo "Connection failed: " . $e->getMessage();
    exit();
  }

?>
