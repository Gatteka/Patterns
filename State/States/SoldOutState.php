<?php
namespace Patterns\State\States;

use Patterns\State\Api\StateInterface;
use Patterns\State\GumballMachine;

/**
 * Class SoldOutState
 * @package Patterns\State\States
 */
class SoldOutState implements StateInterface {


    public function dispense(GumballMachine $base)
    {
        return "Error. No gums in stock.";
    }

    public function turnCrank(GumballMachine $base)
    {
        return "Error. No gums in stock.";
    }

    public function insertMoney(GumballMachine $base)
    {
        return "Error. No gums in stock.";
    }

    public function ejectMoney(GumballMachine $base)
    {
        return "Error. No gums in stock.";
    }

    public function __toString()
    {
        return __CLASS__;
    }
}