<?php
class this_name{
  
    public $name = 'ABC';
  
    public function display(){
        return $this->name;
    }
}
  
$obj = new this_name();
echo $obj->display();
  
?>