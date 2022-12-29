<?php

function ChecarNumeroPrimo($num)
{
  if (is_numeric($num)) {

    if ($num == 1)
      return 0;

    for ($cont = 2; $cont <= (int)$num / 2; $cont++) {
      if ($num % $cont == 0)
        return 0;
    }
    return 1;
  } else {
    echo "O Valor digitado não é um Valor númerico.";
  }
}

$num = 6;
$checar = ChecarNumeroPrimo($num);
/* if ($checar == 1)
    echo "Número Primo!";
else
    echo "Não é um Número Primo!";
*/

function  Desafio_Conjectura_Goldbach($num)
{
  if (is_numeric($num)) {
    for ($cont = 4; $num >= $cont; $cont += 2) {

      for ($num_Primo = 2; $num_Primo < $cont; $num_Primo++) {

        if ($num_Primo < 2 || $num_Primo % 2 != 0) {

          if ($num_Primo + ($cont - $num_Primo) == $cont) {
          }
          $VerificarSoma = $cont - $num_Primo;
          echo "Conjectura Goldbach verdadeira para: $cont <br> sendo $cont = $num_Primo + $VerificarSoma" . "\n";
        }
      }
    }
  } else {
    echo "O Valor digitado não é um Valor númerico.";
  }
}
