<?php
 $servername = "localhost";
 $username = "root";
 $db_password = "";
 $dbname = "movilmad";

 try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $db_password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 } catch (PDOException $e) {
     return "Error: " . $e->getMessage();
 }
?>