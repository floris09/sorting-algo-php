<?php

function fibonacci($number1, $number2, $stop){

  $number3 = $number1 + $number2;
  if($number3 >= $stop){ return 'done'; }

  echo $number3 . '<br>';
  fibonacci($number2, $number3, $stop);

}

fibonacci(1,1,100000000000000);

 ?>
