<?php
  require 'database.php';
  $username = $_POST["user"];
  $password = $_POST["pass"];
  $pdo = Database::connect();
  $sql = "SELECT * FROM customers WHERE username='$username' and password='$password'";
  error_log($sql); 
  header("Location: index.php?invalid=true");
  foreach ($pdo->query($sql) as $row) {
    if ($row["username"] == "admin") {
      header("Location: customers.php");
    } else {
      $id = $row["id"]; 
      header("Location: read.php?id=".$id);
    } 
  }
  Database::disconnect();
?>
