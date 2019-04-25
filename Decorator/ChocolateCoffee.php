<?php

/**
 * Class ChocolateCoffee
 */
class ChocolateCoffee implements Coffee,Decorator
{
    private $coffee;

    private static $CHOCOLATE_COST = 25;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    function getCost()
    {
        return $this->coffee->getCost() + self::$CHOCOLATE_COST;
    }

    function getDescription()
    {
        return $this->coffee->getDescription() . " with chocolate";

    }

    /**
     * @return mixed
     */
    function serviceToClient()
    {
        return $this->coffee->serviceToClient();
    }


}