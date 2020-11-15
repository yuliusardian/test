<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource Namekian.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.24
 *
 */

namespace App\Third\Race;

class Namekian extends AbstractRace
{
    public static $instance = null;

    public static function getInstance($name)
    {
        if (self::$instance === null) {
            self::$instance = new self($name);
        }

        return self::$instance;
    }

    private function power()
    {
        try {
            $randomInteger =  random_int(1, 10);

            return $randomInteger * 10 + 100;
        } catch (\Exception $e) {
            return 0;
        }
    }
    
    public function genki(): int
    {
        return $this->power();
    }
}