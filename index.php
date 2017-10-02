<?php
  $langage = array("HTML","CSS","Javascript","PHP");
  print_r(ordrealpha($langage));
  echo '<br />';
  echo concatener($langage);
  function ordrealpha($table){
    sort($table);
    return $table;
  }

  function concatener($var1)
  {
    $var2=implode($var1);
    return $var2;
  }
?>
