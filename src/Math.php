<?php 

namespace YousufAlhadhrami\Math;

class Math 
{

    public $sum;

    public function __construct()
{
    $this->sum = 0;
}


    public function add($numbers = []){

        for ($i = 0; $i < count($numbers); $i++) {
            $this->sum += $numbers[$i];
        }
        
        return $this;
    }

    public function sum()
    {
        return $this->sum;
    }
}