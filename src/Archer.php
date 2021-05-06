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

    protected function absorbDamage($damage)
    {
        if(rand(0,1)){
            show("{$this->name} logró evadir el ataque");
        }else{
            return parent::absorbDamage($damage);
        }
    }

}