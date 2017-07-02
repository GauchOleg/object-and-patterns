<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 02.07.2017
 * Time: 21:37
 */
header('Content-type: text/html; charset=utf8');
abstract class Employee{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function fire();
}

class Minion extends Employee {
    function fire()
    {
        print "{$this->name}: убери со стола\n";
    }
}

class NastyBoss{
    private $employees = array();

    function addEmployee($employeeName){
        $this->employees[] = new Minion($employeeName);
    }

    function projectFails(){
        if ( count($this->employees) > 0 ){
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}

$boss = new NastyBoss();
$boss->addEmployee("Вася");
$boss->addEmployee("Петька");
$boss->addEmployee("Манька");
$boss->projectFails();