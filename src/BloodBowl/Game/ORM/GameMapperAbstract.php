<?php

namespace BloodBowl\Game\ORM;

use \Shrikeh\DoctrineTools\Mapper\Interfaces\Identifiable;

abstract class GameMapperAbstract implements Identifiable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\Identifiable;
}