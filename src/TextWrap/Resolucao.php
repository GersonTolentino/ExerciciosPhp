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
 * Boa sorte :D
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
      $fragmento = substr(ltrim($texto) , 0 , ($limitador + 1)); 
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
