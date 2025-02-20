<?php
include_once "huis&room.php";




//nieuwe objecten

$house1 = new House();

$room1 = new Rooms(1,20,45);
$room2 = new Rooms(150,200,445);
$room3 = new Rooms(15,200,235);

$house1->addRooms($room1);
$house1->addRooms($room2);
$house1->addRooms($room3);



echo $house1->getRoomInfo();
echo "<br>";

echo "total volume:" . number_format($house1->calculateVolume()) . " m3";
echo "<br>";
echo "price of house: $" . number_format($house1->getPrice()) ;





 










?>