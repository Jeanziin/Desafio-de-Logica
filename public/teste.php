<?php

function ChecarNumeroPrimo($num)
{
  if (is_numeric($num)) {

    if ($num == 1) 
      return false;
    
    for ($cont = 2; $cont <= (int)$num / 2; $cont++) {
      if ($num % $cont == 0)  
        return false;
    }
    return true; 
  } else {
    return false;
    
  }
}

function  Desafio_Conjectura_Goldbach($userInput)
{
  if (is_numeric($userInput)) { 
    for ($cont = 4; $userInput >= $cont; $cont+=2) { 

      for ($numero = 2; $numero < $cont; $numero++) { 

        if (ChecarNumeroPrimo($numero)) { 

          $resto = $cont - $numero;

          if (ChecarNumeroPrimo($resto)){
            echo "Conjectura Goldbach verdadeira para: $cont <br> sendo $cont = $numero + $resto" . "\n";
          }
        }
      }
    }
  } else {
    echo "O Valor digitado não é um Valor númerico.";
  }
}

$num = 0;
