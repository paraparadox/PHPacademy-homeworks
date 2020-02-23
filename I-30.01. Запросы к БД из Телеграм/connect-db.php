<?php
  try {
    $pdo = new PDO(
      'mysql:host=localhost;
      dbname=30.01.testDB',     //database name
      'alpha',                  //user
      'malcoln',                //password
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
  } catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных" . $e->getMessage();
  }
?>
