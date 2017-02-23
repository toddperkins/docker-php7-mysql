<?php
  
  $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['MYSQL_DATABASE']};charset=utf8";
  $user = $_ENV['MYSQL_USER'];
  $password = $_ENV['MYSQL_PASSWORD'];
  $dbh = new PDO($dsn, $user, $password);
  $sql = "SELECT version();";

  foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row) {
      print_r($row);
  }

?>