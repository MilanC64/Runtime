<?php

namespace Webops\Runtime;


/**
 * SayHello
 * 
 * Dummy class used for development
 */
class SayHello
{
    public function sayHello()
    {
        sleep(10);
        return "Hello";
    }

    public function saySomethingALot(int $howManyTimes, string $something) :string
    {

        $text = '';

        for ($i=0; $i < $howManyTimes ; $i++) { 
            $text .= "$something </br>";
        }

        return $text;
    }

    public static function sayHelloAgain()
    {
        sleep(5);
        return "Hello Again!";
    }

    public static function saySomethingALotStatic(int $howManyTimes, string $something)
    {
        $text = '';

        for ($i=0; $i < $howManyTimes ; $i++) { 
            $text .= "$something </br>";
        }

        return $text;
    }
}