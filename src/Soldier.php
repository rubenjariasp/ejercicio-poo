<?php

namespace Curso;

class Soldier extends Unit
{
    protected $damage = 20;

    public function Attack(Unit $opponet)
    {
        show("{$this->name} ataca con una espada a $opponet->name");

        $opponet->absorbDamage($this->damage);
    }
}