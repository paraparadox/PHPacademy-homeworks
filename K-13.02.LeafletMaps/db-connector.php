<?php
  try {
    $pdo = new PDO(
      'mysql:host=localhost;dbname=leaflet-task-db',
      'alpha',
      'malcoln',
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
  } catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных" . $e->getMessage();
  }
?>
