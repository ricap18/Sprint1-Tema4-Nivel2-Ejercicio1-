

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

class pokerDice {

   private $dice = array("As", "K", "Q", "J", 8, 7);

    public function throw(){
        return array_rand($this->dice);  // Devuelve una posición del array aleatoriamente
   }
    public function shapeName(){
        return $this->dice[$this->throw()];  // Devuelve el valor de la posición del array
    }

    public function getTotalThrows(){
          for ($i=0; $i < 5 ; $i++) { 
              echo self::shapeName(). "</br>";
          }    
    }

}

$gamePoker = new pokerDice;
echo $gamePoker-> getTotalThrows();

?>

</body>
</html>