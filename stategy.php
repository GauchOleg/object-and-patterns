<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 02.07.2017
 * Time: 19:54
 */

abstract class Lesson{
    private $duration;
    private $costStrategy;

    // передаеться объект типа CostStrategy и только, который сохраняется в виде свойства
    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }
    // вызываеться метод объекта типа CostStrategy "Делегирование"
    // Объект типа CostStrategy делегат класса Lesson
    function cost(){
        return $this->costStrategy->cost($this);
    }

    function getDuration(){
        return $this->duration;
    }
}

