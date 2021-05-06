<?php
namespace Curso;


require_once "../vendor/autoload.php";

$ruben = new Soldier("ruben");
$jesus = new Archer("jesus");
$armor = new Armors\BronzeArmor;

$jesus->setArmor($armor);

