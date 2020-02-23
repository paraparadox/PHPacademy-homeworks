<?php
  /**
  создать массив
  заполнить данными от -100 до 100
  найти сумму всех положительных элементов
  */


  function createArray($m,&$s)
  {
    $a=[];
    $s=0;
    for ($i=0;$i<$m;$i++)
    {
      $a[$i] = rand(-100,100);
      if ($a[$i]>0)
      {
        echo "<li>".$a[$i]."</li>";
        $s+=$a[$i];
      } else {
        echo $a[$i]."<br>";
      }
    }
    return $a;
  }

  $b=createArray(20,$summ);
  echo "Сумма всех положительных элементов: ".$summ;

 ?>
