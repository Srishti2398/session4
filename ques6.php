<?php
class factorial_num
{
  protected $_n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->_n = $n;
	}
  public function result()
    {
     $f= 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $f *= $i;
      }
	   return $f;
	   }
 }

$newfactorial = New factorial_num(7);
echo $newfactorial->result();
?>
