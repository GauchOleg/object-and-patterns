<?php
/**
 *
 * Created by PhpStorm.
 * User: oleg
 * Date: 03.07.2017
 * Time: 22:15
 *
 * Example abstract factory
 *
 */

abstract class CommsManager{
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;

    abstract function getHeaderText();
    abstract function make($flag_int);
    abstract function getFooterText();
}

abstract class AppEncoder{
    abstract function encode();
}

class BloggsCommsManager extends CommsManager{
    function getHeaderText()
    {
        return "This header text./n";
    }
    function getFooterText()
    {
        return "This footer text./n";
    }
    function make($flag_int)
    {
        switch ($flag_int){
            case self::APPT :
                return new BlogsAppManager;
                break;
            case self::CONTACT :
                return new BlogsContactsManager;
                break;
            case self::TTD :
                return new BloggsTTDManager();
        }
    }
}
class BlogsAppManager extends AppEncoder{
    function encode()
    {
        // TODO: Implement encode() method.
    }
}
class BlogsContactsManager extends AppEncoder{
    function encode()
    {
        // TODO: Implement encode() method.
    }
}
class BloggsTTDManager extends AppEncoder{
    function encode()
    {
        // TODO: Implement encode() method.
    }
}