<?php
namespace Codecademy;

$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);
unset($my_car["oil"]);
$my_car["oil"]="new and premium";
unset($my_car["tires"]);
$my_car["tires"]="new with deep treads";
unset($my_car["filth"]);
print_r($my_car);
