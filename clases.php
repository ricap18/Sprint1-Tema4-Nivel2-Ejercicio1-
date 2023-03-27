

    
<?php

class PokerDice {

   private  $dice = array("As", "K", "Q", "J", 8, 7);
   public static $totalThrows = -5;

    public function throw(){
        self::$totalThrows++;
        return array_rand($this->dice);  // Devuelve una posición del array aleatoriamente
    }
    
    public function shapeName(){
        return $this->dice[$this->throw()];  // Devuelve el valor de la posición del array
    }

    public  static function getTotalThrows(){
          return self::$totalThrows;
          }    
    }



?>

