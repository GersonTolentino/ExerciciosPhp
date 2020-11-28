<?php

namespace Galoa\ExerciciosPhp\TextWrap;

class Resolucao implements TextWrapInterface {
  public function textWrap(string $texto, int $limitador): array {
    $texto = ($texto . " ");
    while (strlen($texto) != 0) {
      // Fragmento da string pelo limitador.
      $fragmento = mb_substr(ltrim($texto), 0, ($limitador + 1));  
      // Adicionado "1" para pegar até o caractere demilimado.
      if (empty(strripos($fragmento, " ")) == TRUE) {
        $texto = ltrim(mb_substr($texto, ($limitador), (strlen($texto))));
      }
      else {
        $texto = ltrim(mb_substr($texto, (strripos($fragmento, " ")), (strlen($texto))));
        $fragmento = mb_substr((trim($fragmento)), 0, (strripos($fragmento, " ")));
      }
      $arr[] = $fragmento;
      
    }
    for ($i = 0; $i < count($arr); $i++) {
      $arr[$i] = trim($arr[$i]);
    }
    return ($arr);

  }

}
