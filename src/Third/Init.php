<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource Init.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.06
 *
 */

include __DIR__ . "/../../vendor/autoload.php";

use App\Third\RaceFactory;

//Example output :
//Gohan Genki is : 630 ( Gohan is Saiyan race)
//Picollo Genki is : 120 (Picollo is Namekian race)
//Krilin Genki is : 10 (Krillin is Human race)
//Vegeta Genki is : 720 (Vegeta is Saiyan race)

$gohan = RaceFactory::create('Saiyan', 'Gohan');
$picollo = RaceFactory::create('Namekian', 'Picollo');
$krilin = RaceFactory::create('Human', 'Krilin');
$vegeta = RaceFactory::create('Saiyan', 'Vegeta');

echo $gohan->getOutPut();
echo $picollo->getOutPut();
echo $krilin->getOutPut();
echo $vegeta->getOutPut();
