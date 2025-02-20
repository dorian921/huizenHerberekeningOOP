
<?php

//maker: dorian volmer
//function make class and methods

class Rooms {
  //properties
  private float $width;
  private float $height;
  private float $length;

//Methods
   public function __construct( $width, $height, $length )
   {
    
    $this->width = $width;
    $this->height = $height;
    $this->length = $length;
    
}

public function getVolume() {
  return $this->width * $this->height * $this->length;
  
}

public function getWidth() {
  return $this->width;
}

public function getHeight() {
  return $this->height;
}

public function getLength() {
  return $this->length;
}



   
}

class House {
  //properties

  private array $rooms ;
  public int $pricePerM3 = 250;
  

  //methods
  public  function __construct() {
    $this->rooms = [];
    
  }


  public function addRooms(Rooms $room) {
    $this->rooms[] = $room;
    
    

  }
  public function getRooms() {
    return $this->rooms;
  }

 
  public function calculateVolume() {
    $totalVolume = 0;
    foreach ($this->rooms as $room) {
      $totalVolume += $room->getVolume();
      
    }
    return $totalVolume;

  }

  public function getPrice() {
   return $this->calculateVolume() * $this->pricePerM3;
  }

  public function getRoomInfo() {
    $roomdata = [];
      foreach($this->rooms as $room) {
        $roomdata[] = 'room width: ' . $room->getWidth() . ' room height: ' . $room->getHeight() . ' room length: ' . $room->getLength() . "<br>";
        

      }
return implode ("" , $roomdata);

      
  }
  


}





?>