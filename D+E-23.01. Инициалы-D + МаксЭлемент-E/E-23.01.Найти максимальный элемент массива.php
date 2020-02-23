<?php
/*
Написать функцию которая принимает на
вход массив чисел и возвращает
максимальный элемент
*/

  function findMax($a)
  {
    $max=$a[0];
    $size = count($a);
    for ($i=1;$i<$size;$i++)
      if ($max<$a[$i])
        $max=$a[$i];
    return $max;
  }

  $test = array(22, 24, 37, 74, 23, 2, 10, 104, 14, 205);

  echo findMax($test);

 ?>
