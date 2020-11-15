<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource AbstractRace.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.22
 *
 */

namespace App\Third\Race;

use App\Third\RaceInterface;

abstract class AbstractRace implements RaceInterface
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getOutPut()
    {
        $powerGenki = $this->genki();
        $classAsRace = (new \ReflectionClass($this))->getShortName();

        return sprintf('%s Genki is : %d (%s is %s race)', $this->name, $powerGenki, $this->name, $classAsRace) . "\n";
    }
}