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

    protected function takeDamage($damage)
    {
        $life = $this->life;

        if(!is_null($this->amor)){
            $damage =  $this->armor->absorbDamage($damage);
        }

        $this->life = $this->life - $damage;

        $this->die();

        show("{$this->name} tenia {$life} pts de vida. Recibio un daño de {$damage}, con lo que actualmente cuenta con {$this->life} pts de vida");
    }

    public function absorbDamage($damage)
    {
        $this->takeDamage($damage);
    }

    private function die()
    {
        if($this->life <= 0){
            show("{$this->name} ha muerto");
            die();
        }
    }

    abstract public function Attack(Unit $opponet);

}