
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>


<?php

require_once "clases.php";
$dice1 = new pokerDice();
$dice2 = new PokerDice();
$dice3 = new PokerDice();
$dice4 = new PokerDice();
$dice5 = new PokerDice();


$dice1->throw();
$dice2->throw();
$dice3->throw();
$dice4->throw();
$dice5->throw();


echo "Dado 1: " . $dice1->shapeName()."</br>";
echo "Dado 2: " . $dice2->shapeName()."</br>";
echo "Dado 3: " . $dice3->shapeName()."</br>";
echo "Dado 4: " . $dice4->shapeName()."</br>";
echo "Dado 5: " . $dice5->shapeName()."</br>";


echo PokerDice::getTotalThrows();

?>

</body>
</html>