<?php
  require_once("connect-db.php");
  echo "<strong>Task 1. Показать все заказы текущей недели.</strong><br>";
  $task1 = 'SELECT * FROM zakazi WHERE time >= "2020-01-27 00:00:00" AND time < "2020-02-03 00:00:00"';
  $thisweek = $pdo->prepare($task1);
  $thisweek->execute();
  while ($r = $thisweek->fetch())
    echo "<p>ID заказа: ".$r['id']." | ID товара: ".$r['product-id']." | Цена: ".$r['cost']." | Дата и время заказа: ".$r['time']."</p>";

  echo "<strong>Task 2. Вывести сумму всех заказов.</strong><br>";
  $task2 = 'SELECT SUM(cost) FROM zakazi';
  $thisweek = $pdo->prepare($task2);
  $thisweek->execute();
  $r = $thisweek->fetch();
  echo "<p>".$r['SUM(cost)']."</p>";

  echo "<strong>Task 3. Вывести сумму всех заказов за январь месяц.</strong><br>";
  $task3 = 'SELECT SUM(cost) AS jan_sum FROM zakazi WHERE time >= "2020-01-01 00:00:00" AND time <= "2020-02-01 00:00:00"';
  $thisweek = $pdo->prepare($task3);
  $thisweek->execute();
  $r = $thisweek->fetch();
  echo "<p>".$r['jan_sum']."</p>";
 ?>
