<?php

if($_POST){

  $controle_bits = [1,1,1];

  $letter1 = $_POST['number1'];
  $letter2 = $_POST['number2'];
  $letter3 = $_POST['number3'];
  $letter4 = $_POST['number4'];

  if(($letter1 + $letter2 + $letter4) % 2 == 0){
    $controle_bits[0] = 0;
  }

  if(($letter2 + $letter3 + $letter4) % 2 == 0){
    $controle_bits[1] = 0;
  }

  if(($letter1 + $letter3 + $letter4) % 2 == 0){
    $controle_bits[2] = 0;
  }

  $controlebit1 = $controle_bits[0];
  $controlebit2 = $controle_bits[1];
  $controlebit3 = $controle_bits[2];

  echo "te versturen bericht: ". $letter1 .$letter2 .$letter3 .$letter4 . $controlebit1. $controlebit2. $controlebit3. '<br>';


  $ontvangen_bericht = [0,1,1,1];

  $ontvangen_letter1 = $ontvangen_bericht[0];
  $ontvangen_letter2 = $ontvangen_bericht[1];
  $ontvangen_letter3 = $ontvangen_bericht[2];
  $ontvangen_letter4 = $ontvangen_bericht[3];


  $controle1 = false;
  $controle2 = false;
  $controle3 = false;


  if(($ontvangen_letter1 + $ontvangen_letter2 + $ontvangen_letter4) % 2 == $controlebit1){
    $controle1 = true;
  }

  if(($ontvangen_letter2 + $ontvangen_letter3 + $ontvangen_letter4) % 2 == $controlebit2){
    $controle2 = true;
  }

  if(($ontvangen_letter1 + $ontvangen_letter3 + $ontvangen_letter4) % 2 == $controlebit3){
    $controle3 = true;
  }


  if($controle1 == false){ echo "controle 1 is false <br>"; }
  if($controle2 == false){ echo "controle 2 is false <br>"; }
  if($controle3 == false){ echo "controle 3 is false <br>"; }


  if(($controle1 == false && $controle2 == false) && $controle3 == false){
    echo "letter 4 is false <br>";

    if($ontvangen_letter4 == 0){
      $ontvangen_letter4 = 1;
    } else {
      $ontvangen_letter4 = 0;
    }

    echo "juiste bericht: ". $ontvangen_letter1 . $ontvangen_letter2 . $ontvangen_letter3 . $ontvangen_letter4;

  } elseif($controle2 == false && $controle3 == false){
      echo "letter 3 is false <br>";

      if($ontvangen_letter3 == 0){
        $ontvangen_letter3 = 1;
      } else {
        $ontvangen_letter3 = 0;
      }

      echo "juiste bericht: ". $ontvangen_letter1 . $ontvangen_letter2 . $ontvangen_letter3 . $ontvangen_letter4;

  } elseif($controle1 == false && $controle2 == false){
        echo "letter 2 is false <br>";

        if($ontvangen_letter2 == 0){
          $ontvangen_letter2 = 1;
        } else {
          $ontvangen_letter2 = 0;
        }

        echo "juiste bericht: ". $ontvangen_letter1 . $ontvangen_letter2 . $ontvangen_letter3 . $ontvangen_letter4;

  } elseif($controle1 == false && $controle3 == false){
        echo "letter 1 is false <br>";

        if($ontvangen_letter1 == 0){
          $ontvangen_letter1 = 1;
        } else {
          $ontvangen_letter1 = 0;
        }

        echo "juiste bericht: ". $ontvangen_letter1 . $ontvangen_letter2 . $ontvangen_letter3 . $ontvangen_letter4;

  } elseif($controle1 == false){
        echo "er zijn meerdere letters false, kan het bericht niet lezen";
  } elseif($controle2 == false){
        echo "er zijn meerdere letters false, kan het bericht niet lezen";
  } elseif($controle3 == false){
        echo "er zijn meerdere letters false, kan het bericht niet lezen";
  } else {
        echo "bericht was juist <br>";
        echo "bericht: ". $ontvangen_letter1 . $ontvangen_letter2 . $ontvangen_letter3 . $ontvangen_letter4;
  }
}
 ?>


<html>
<body>

<form action="/qien/sorting-algo-php/coding-otf.php" method="post">
  <input type="number" name="number1">
  <input type="number" name="number2">
  <input type="number" name="number3">
  <input type="number" name="number4">
  <input type="submit" value="submit">
</form>


</body>
</html>
