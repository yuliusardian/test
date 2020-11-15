<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource RaceFactory.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.18
 *
 */

namespace App\Third;

use App\Third\Exceptions\{RaceNotFoundException};

class RaceFactory
{
    public static function create(string $raceType, string $name)
    {
        if (!$raceType) {
            throw new RaceNotFoundException('$raceType Race not found.');
        }

        $namespaceRace = __NAMESPACE__ . '\\Race\\' . ucwords($raceType);

        if (!class_exists($namespaceRace)) {
            throw new RaceNotFoundException('$raceType Race not found.');
        }

        return $namespaceRace::getInstance($name);
    }
}