<?php

namespace Patterns\State;

use Patterns\State\Api\StateInterface;
use Patterns\State\States\SoldState;

/**
 * Class GumballMachine
 * @package Patterns\State
 */
class GumballMachine
{
    /**
     * @var int
     */
    public $numberOfGums;

    /**
     * @var StateInterface
     */
    public $state;

    /**
     * GumballMachine constructor.
     * @param int $numberOfGums
     */
    public function __construct(
        int $numberOfGums
    )
    {
        $this->numberOfGums = $numberOfGums;
    }

    /**
     * @return mixed
     */
    public function turnCrank()
    {
        return $this->state->turnCrank($this);
    }

    /**
     * @return mixed
     */
    public function insertMoney()
    {
        return $this->state->insertMoney($this);
    }

    public function ejectMoney()
    {
        return $this->state->ejectMoney($this);
    }

    /**
     * @param StateInterface $state
     * @return StateInterface
     */
    public function setState(StateInterface $state)
    {
        return $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     *  Get info
     */
    public function getInfo()
    {
        return "This state is " . $this->state . "</br>" .
            "Number of gums is " . $this->numberOfGums . "</br>";
    }

}