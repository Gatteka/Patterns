<?php
namespace Patterns\State\States;

use Patterns\State\Api\StateInterface;
use Patterns\State\GumballMachine;

/**
 * Class HasMoneyState
 * @package Patterns\State\States
 */
class HasMoneyState implements StateInterface {


    public function dispense(GumballMachine $base)
    {
        return "Error. you are not turned crank!";
    }

    public function turnCrank(GumballMachine $base)
    {
        $base->numberOfGums -= 1;
        $soldState = new SoldState();
        $base->setState($soldState);
         return "turning crank... gum is rolling to you!";
    }

    public function insertMoney(GumballMachine $base)
    {
        return " Error. Money already in machine.";
    }

    public function ejectMoney(GumballMachine $base)
    {
        $base->setState(new NoMoneyState());
       return " Money is backed to you.";
    }

    public function __toString() : string
    {
       return __CLASS__;
    }
}