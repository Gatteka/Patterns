<?php

namespace Patterns\State\States;

use Patterns\State\Api\StateInterface;
use Patterns\State\GumballMachine;

/**
 * Class NoMoneyState
 * @package Patterns\State\States
 */
class NoMoneyState implements StateInterface
{

    /**
     * @param GumballMachine $base
     * @return mixed|string
     */
    public function dispense( GumballMachine $base)
    {
        return "Error.";
    }

    public function turnCrank( GumballMachine $base)
    {

        return 'Error.You have no money to buy a gum!';
    }

    public function insertMoney(GumballMachine $base)
    {
        $hasMoneyState = new HasMoneyState();
        $base->setState($hasMoneyState);
        return "money inserted...";
    }

    public function ejectMoney(GumballMachine $base)
    {
        return "Error.";
    }

    public function __toString()
    {
        return __CLASS__;
    }
}