<?php

namespace Patterns\State\States;

use Patterns\State\Api\StateInterface;
use Patterns\State\GumballMachine;

/**
 * Class SoldState
 * @package Patterns\State\States
 */
class SoldState implements StateInterface
{

    /**
     * @param $base
     * @return string
     */
    public function dispense(GumballMachine $base)
    {
        if ($base->numberOfGums <= 0) {
            $base->setState(new SoldOutState());
            return "It was last gum!";
        }
        $base->setState(new NoMoneyState());
        return "Getting gum ...";
    }

    /**
     * @param GumballMachine $base
     * @return string
     */
    public function turnCrank(GumballMachine $base)
    {
        return "Error. No money inserted since last buy!";
    }

    /**
     * @param GumballMachine $base
     * @return string
     */
    public function insertMoney(GumballMachine $base)
    {
        if ($base->numberOfGums <= 0) {
            return "can't inserting money ... no gums";
        }
        $base->setState(new HasMoneyState());
        return "inserting money ...";
    }

    /**
     * @param GumballMachine $base
     * @return string
     */
    public function ejectMoney(GumballMachine $base)
    {
        return "Error. no money in machine";
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__;
    }
}