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
    $texto = $texto." " ;//adicionando " "(espaço) pois minha condicional trabalha com ela, caso não colocar da erro nas ultimas duas linhas
    while(strlen($texto)!=0){//enquano possuir string dentro da variavel texto o loop ocorre
      $fragmento=substr(ltrim($texto),0,$limitador+1);
      if(empty(strripos($fragmento," ")) == true){
        $texto= ltrim(substr($texto,($limitador),strlen($texto)));
      }
      else{
        $texto = ltrim(substr($texto,(strripos($fragmento," ")),strlen($texto)));
        $fragmento = substr((trim($fragmento)),0,(strripos($fragmento," ")));
      }
      $arr[]=$fragmento;
    }
    return ($arr);
    }
 

}
