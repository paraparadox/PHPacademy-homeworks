<?php
  require_once('db-connector.php');
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];
  $comment = $_POST['comment'];
  $crdate = date('o-m-d h:m:s',time());
  $query = "INSERT INTO coordinates VALUES (NULL, :lat, :lng, :comment, :created_date)";
  $coor = $pdo->prepare($query);
  try {
    $coor->execute(['lat' => $lat, 'lng' => $lng, 'comment' => $comment, 'created_date' => $crdate, ]);
  } catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных" . $e->getMessage();
  }
  echo "HELLO";
  header('Location: leaflet-task.php');
  exit();
 ?>
