<?php

namespace Curso;

require_once "../vendor/autoload.php";

$ruben = new Soldier("ruben");
$jesus = new Archer("jesus");

$ruben->move("norte");
$jesus->move("sur");