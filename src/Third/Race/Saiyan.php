<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource Saiyan.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.24
 *
 */

namespace App\Third\Race;

class Saiyan extends AbstractRace
{
    public static $instance = null;

    public static function getInstance($name)
    {
        if (self::$instance === null) {
            self::$instance = new self($name);
        }

        return self::$instance;
    }

    private function normalPower()
    {
        try {
            $randomInteger = random_int(1, 10);

            return $randomInteger * 10 + 100;
        } catch (\Exception $e) {
            return 0;
        }
    }

    private function saiyanPower()
    {
        try {
            $randomInteger = random_int(1, 10);

            return $randomInteger * 10 + 500;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function genki(): int
    {
        return $this->normalPower() + $this->saiyanPower();
    }
}