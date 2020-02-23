<?php
/*
Создать функцию принимающая на вход
массив подобного вида:
$students = [
  ["Gadoev","Nazir","Saidovich"],
  ["Nazarov","Abu","Qurbonovich"],
  ["Naimov","Rajab","Boboevich"],
];
Функция должна вернуть
  Gadoev N.S.
  Nazarov A.Q.
  Naimov R.B.

скинуть ссылку профиля на гитхаб
создать репоз (c класс CRUD)
+последнее задание (Фамилия И.О.)
*/

  function initialsOfPerson($ar, $j=-1)
  {
    $n = count($ar);
    if (($j>0)&&($j<=$n))
    {
      echo  $ar[$j][0] .' '.
            $ar[$j][1][0] . '.' .
            $ar[$j][2][0] . '.' . '<br>';
    } else {
      for ($i=0;$i<$n;$i++)
        echo  $ar[$i][0] .' '.
              $ar[$i][1][0] . '.' .
              $ar[$i][2][0] . '.' . '<br>';
    }
  }

  $students = [
    ["Gadoev","Nazir","Saidovich"],
    ["Nazarov","Abu","Qurbonovich"],
    ["Naimov","Rajab","Boboevich"],
    ["Naimov","Rajab","Boboevich"],
    ["Naimov","Rajab","Boboevich"],
    ["Naimov","Rajab","Boboevich"],
  ];

  echo "Простой вызов:<br><br>";
  initialsOfPerson($students);
  echo "<br>Вызов с указанием строки:<br><br>";
  initialsOfPerson($students,1);


 ?>
