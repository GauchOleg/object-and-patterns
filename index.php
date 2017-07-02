<?php
/**
 * Bad example
 * User: oleg
 * Date: 02.07.2017
 * Time: 18:31
 */
abstract class Lesson{
    protected $duration;
    const FIXED = 1;
    const TIMED = 1;
    private $costtype;

    function __construct($duration, $costtype=1){
        $this->costtype = $costtype;
        $this->duration = $duration;
    }

    function cost(){
        switch ($this->costtype){
            case self::TIMED :
                return (5 * $this->duration);
                break;
            case self::FIXED :
                return 30;
                break;
            default:
                $this->costtype = self::FIXED;
                return 30;
        }
    }

    function chargeType(){
        switch ($this->chargeType()){
            case self::TIMED :
                return "Почасовая оплата";
                break;
            case self::FIXED :
                return "Фиксированная оплата";
                break;
            default:
                $this->costtype = self::FIXED;
                return "Фиксированная ставка";
        }
    }
}