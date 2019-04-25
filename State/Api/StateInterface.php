<?php

namespace Patterns\State\Api;

use Patterns\State\GumballMachine;

/**
 * Interface StateInterface
 */
interface StateInterface
{

    /**
     * @param $base
     * @return mixed
     */
    public function dispense(GumballMachine $base);

    /**
     * @param $base
     * @return mixed
     */
    public function turnCrank(GumballMachine $base);

    /**
     * @param $base
     * @return mixed
     */
    public function insertMoney(GumballMachine $base);

    /**
     * * @param $base
     * @return mixed
     */
    public function ejectMoney(GumballMachine $base);

    /**
     *
     * @return mixed
     */
    public function __toString();

}