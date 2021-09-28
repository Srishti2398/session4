<?php

trait A{                        //train A
   public function test1(){        //fn of trait A
      echo "test1 method in trait<br>";
   }
   public function test2(){           //fn of trait A
      echo "test2 method in trait<br>";
   }
}
trait B{                     //tait B
    public function test3(){     // fn of tait B
       echo "test1 method in trait<br>";
    }
    public function test4(){
       echo "test2 method in trait<br>";  //fn of trait B
    }
 }

 trait C{                       //trait C
    public function test5(){          //fn of trait C
       echo "test1 method in trait<br>";
    }
    public function test6(){             //fn of trait C
       echo "test2 method in trait<br>";
    }
 }


//using trait
class testclass{
   use A,B,C;
   public function test1(){         //Override trait A fn
      echo "test1 method overridden</br>";
   }
   public function test3(){           //Override trait B fn
    echo "test3 method overridden<br>";
 }
 public function test5(){            //Override trait C fn
    echo "test5 method overidden<br>";
 }
}
$obj=new testclass();
$obj->test1();
$obj->test2();
$obj->test3();
$obj->test4();
$obj->test5();
$obj->test6();

?>
