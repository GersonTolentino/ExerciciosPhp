<?php

namespace Galoa\ExerciciosPhp\TextWrap;

class Resolucao implements TextWrapInterface {
  
  public function textWrap(string $texto, int $limitador): array {
    $texto = ($texto . " ");
    while (strlen($texto) != 0) {
      $fragmento = substr(ltrim($texto), 0 , ($limitador + 1));
      // Adicionado "1" para pegar até o caractere demilimado, cso contrário não daria certo.
      if (empty(strripos($fragmento, " ")) == TRUE) {
        $texto = ltrim(substr($texto, ($limitador), (strlen($texto))));
      }
      else {
        $texto = ltrim(substr($texto, (strripos($fragmento, " ")), (strlen($texto))));
        $fragmento = substr((trim($fragmento)), 0, (strripos($fragmento, " ")));
      }
      $arr[] = $fragmento;
    }
    return ($arr);
    
  }
  
}
