<?php

namespace Curso\Armors;

use Curso\Unit;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage/2;
    }

    public function getDescription(Unit $unit)
    {
        show("{$unit->getName()} obtuvo una armadura de bronce");
    }

}