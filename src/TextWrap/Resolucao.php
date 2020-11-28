<?php

namespace Galoa\ExerciciosPhp\TextWrap;
/**
  * Implemente sua resolução nessa classe.
  *
  * Depois disso:
  * - Crie um PR no github com seu código
  * - Veja o resultado da correção automática do seu código
  * - Commit até os testes passarem
  * - Passou tudo, melhore a cobertura dos testes
  * - Ficou satisfeito, envie seu exercício para a gente! <3
  *
  * Boa sorte: D
  */

class Resolucao implements TextWrapInterface {
     /**
   * {@inheritdoc}
   *
   * Apague o conteúdo do método abaixo e escreva sua própria implementação,
   * nós colocamos esse mock para poder rodar a análise de cobertura dos
   * testes unitários.
   */

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
