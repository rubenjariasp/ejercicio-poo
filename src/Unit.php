<?php

namespace Curso;

use Curso\Armors\Armor;


abstract class Unit
{
    protected $name;
    protected $life = 50;
    protected $armor;

    public function __construct($name, Armor $armor = null)
    {
        $this->name = ucwords(strtolower($name));
        $this->armor = $armor;
    }

    public function getName()
    {
        return $this->name;
    }

    public function move($direction)
    {
        show("{$this->name} se desplaza hacía el {$direction}");
    }

    public function setArmor(Armor $armor)
    {
        $this->armor = $armor;
        $this->armor->getDescription($this);
    }

}