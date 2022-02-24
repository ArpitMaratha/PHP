<?php

class Item
{
    public $name;
    public $description = 'This is the default';

    function sayHello()
    {
        echo "Hello";
    }

    function getName()
    {
        return $this->name;
    }
}
