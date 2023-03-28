

    
<?php

class PokerDice {

   private static $dice = array("As", "K", "Q", "J", 8, 7);
   public static $totalThrows = 0;
   public $throw= " ";

  
    public function throw(){
        self::$totalThrows++;
        $this->throw = array_rand(self::$dice);  // Devuelve una posición del array aleatoriamente
    }
    
    public function shapeName(){
        return self::$dice[$this->throw ];  // Devuelve el valor de la posición del array
    }

    public  static function getTotalThrows(){
          return self::$totalThrows;
          }    
    }



?>

