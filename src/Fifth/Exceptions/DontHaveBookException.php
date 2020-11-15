<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource DontHaveBookException.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.25
 *
 */

namespace App\Fifth\Exceptions;

use Throwable;

class DontHaveBookException extends \Exception
{
    protected $message = 'Tidak punya buku';
}