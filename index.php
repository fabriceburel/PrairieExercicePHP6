<?php
//declaration du tableau language
  $language = array("HTML","CSS","Javascript","PHP");
  //on parcours le tableau avec la boucle "foreach" en appelant la fonction orderalpha
  foreach (orderalpha($language) as $sortedarray) {
    echo $sortedarray . '<br />';
  }
  echo concat($language);
  //declaration de la fonction alphabetique qui permet de trier $language
  function orderalpha($table){
  //vérification que le paramètre entrer est un tableau
    if(is_array($table)==true){
      //tri du tableau en ordre alphabetique avec la fonction sort
    sort($table);
    }
    //on retourne la variable $table qui sera récupérer lorsque la fonction orderalpha sera appelé
    return $table;
  }
  function concat($table)
  {
    //vérification que le paramètre entrer est un tableau
    if(is_array($table)==true){
      //implode(caractère entre chaque mot,variable tableau) permet de recupérer une chaine de caractère d'un tableau l'inverse de la fonction implode est explode()
    $chainetable=implode(' ',$table);
  }
    //on retourne la variable $table qui sera récupérer lorsque la fonction orderalpha sera appelé
    return $chainetable;
  }
?>
