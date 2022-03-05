<?php
class Simple_1
{
    private $number;
    
    public function __construct($number) //10
    {
        $this->number = $number;
    }

    public function modulus($divisor) //2
    {
        if($divisor > $this->number) // - throw an invalid exception if the given divisor is greater than the dividend
        {
            throw new \InvalidArgumentException("Divisor should not greater than dividend");
        }
        else if(!is_numeric($divisor)) // - should only accept numbers
        {
            throw new \InvalidArgumentException("Divisor is not a number");
        }

        return $this->number % $divisor;
    }
}