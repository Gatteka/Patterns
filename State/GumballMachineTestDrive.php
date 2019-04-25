<?php

namespace Patterns\State;

use Patterns\State\States\NoMoneyState;

/**
 * Class GumballMachineTestDrive
 * @package Patterns\State
 */
class GumballMachineTestDrive
{

    public static function main()
    {


        $gumballMachine = new GumballMachine(5);
        $initialState = new NoMoneyState();
        $gumballMachine->setState($initialState);


        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "Поворачиваю ручку -> ";
        echo $gumballMachine->turnCrank();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo "Забираю монету -> ";
        echo $gumballMachine->ejectMoney();
        echo "</br>";
        echo "Поворачиваю ручку -> ";
        echo $gumballMachine->turnCrank();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo "Поворачиваю ручку -> ";
        echo $gumballMachine->turnCrank();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo "Поворачиваю ручку -> ";
        echo $gumballMachine->turnCrank();
        echo "</br>";
        echo "Забираю монету -> ";
        echo $gumballMachine->ejectMoney();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Поворачиваю ручку -> ";
        echo $gumballMachine->turnCrank();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Поворачиваю ручку -> ";
        echo $gumballMachine->turnCrank();
        echo "</br>";
        echo "Добавляю монету -> ";
        echo $gumballMachine->insertMoney();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
        echo "Поворачиваю ручку -> ";
        echo $gumballMachine->turnCrank();
        echo "</br>";
        echo $gumballMachine->getInfo();
        echo "</br>";
    }
}
