<?php

namespace Curso\Armors;

use Curso\Unit;

interface Armor
{
    public function absorbDamage($damage);
    public function getDescription(Unit $unit);
}
