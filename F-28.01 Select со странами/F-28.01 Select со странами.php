<?php
/*
дан некий массив со списком стран
id столица тел-код и т.д.
*/
  $countries = [
      'Tajikistan' => [
          'id' => 101,
          'capital' => 'Dushanbe',
          'code' => 992
      ],
      'France' => [
          'id' => 34,
          'capital' => 'Paris',
          'code' => 33
      ],
      'Russian Federation' => [
          'id' => 125,
          'capital' => 'Moscow',
          'code' => 7
      ],
      'Austria' => [
          'id' => 507,
          'capital' => 'Vienna',
          'code' => 43
      ]
  ];

  ksort($countries);
  foreach ($countries as $key => $val) {
      echo "$key - ".$val['capital']."<br>";
  }

  echo "<br>";

  echo '<select onchange="showCapital(this.value)">'."\n";
  foreach ($countries as $key => $country) {
    echo "<option value=\"".$country['id']."\">".$key."</option>\n";
  }
  echo "</select>\n";



echo "
  <script type='text/javascript'>
    function showhideBlocks(val){
        document.getElementById(val).style.display='block';
      }
  </script>
";


?>
