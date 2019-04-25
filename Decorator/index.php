<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$coffee = new SimpleCoffee;
echo "You need to pay " . $coffee->getCost();
echo "</br>";
echo $coffee->getDescription();
echo "</br>";
echo $coffee->serviceToClient();
echo "</br>";

$coffee = new MilkCoffee($coffee);
echo "You need to pay " . $coffee->getCost();
echo "</br>";
echo $coffee->getDescription();
echo "</br>";
echo $coffee->serviceToClient();
echo "</br>";

$coffee = new ChocolateCoffee($coffee);
echo "You need to pay " . $coffee->getCost();
echo "</br>";
echo $coffee->getDescription();
echo "</br>";
echo $coffee->serviceToClient();
echo "</br>";