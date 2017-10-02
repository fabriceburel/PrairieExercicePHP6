<?php
  $langage = array("HTML","CSS","Javascript","PHP");
  ordrealpha($langage);
  echo '<br />';
  concatener($langage);
  function ordrealpha($table){
    sort($table);
      foreach ($table as $key => $val) {
        echo "$val \n";
      }
  }
  function concatener($var1)
  {
    $var2=implode($var1);
    echo $var2;
  }
?>
