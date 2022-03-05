<?php

class Simple_2
{
    private $name;
    private $age;
    private $favecolor;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setFaveColor($favecolor)
    {
        $this->favecolor = $favecolor;
    }

    public function setTogetherInput($name,$age,$favecolor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->favecolor = $favecolor;

    }


    public function getName()
    {
        if(!ctype_alpha($this->name))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->name;
    }

    

    public function getAge()
    {
        if(!is_numeric($this->age))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->age;
    }
      
    public function getFaveColor()
    {
        if(!ctype_alpha($this->favecolor))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->favecolor;
    }

    public function getTogetherInput()
    {
        return $this->name;
        return $this->age;
        return $this->favecolor;
    }

}