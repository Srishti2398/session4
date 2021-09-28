<?php

class Base   //base class
{
    function basefn()  //base class fn
    {
        echo "basefn is called(grandparent)<br>";
    }
}

class Derived1 extends Base //derived class from base
{
    function dr1fn() //derived3 class function
    {
        echo "dr1fn is called(parent)<br>";
    }
}

class Derived2 extends Derived1 //derived class from derived1
{
    function dr2fn()  //derived2 class function
    {
        echo "dr2fn is called(son)<br>";
    }
}

$d2Obj = new Derived2();

$d2Obj->basefn();
$d2Obj->dr1fn();
$d2Obj->dr2fn();

?>
