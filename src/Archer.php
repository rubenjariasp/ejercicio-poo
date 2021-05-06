<?php

namespace Curso;

class Archer extends Unit
{
    protected $damage = 10;

    public function Attack(Unit $opponet)
    {
        show("{$this->name} dispara una flecha a $opponet->name");

        $opponet->absorbDamage($this->damage);
    }
}