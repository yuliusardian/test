<?php

/**
 * @param array $files
 *
 * @return array
 */
function groupByOwners(array $files = []) : array
{
    $tmp = [];
    foreach ($files as $fileName => $owner) {
        if (!is_string($owner) || !is_string($fileName)) {
            continue;
        }

        // validate file extension.
        $regex = '/^.*\.(txt|py)$/m';
        preg_match_all($regex, $fileName, $matches, PREG_SET_ORDER, 0);

        if (!$matches) {
            continue;
        }

        $tmp[$owner][] = $fileName;
    }
    return $tmp;
}

//$files = [
//    'example',
//    'of',
//    'wrong',
//    'array'
//];

$files = [
    'invalid.h' => 'Mr. Null',
    'input.txt' => 'Randy',
    'code.py' => 'Stan',
    'output.txt' => 'Randy'
];

print_r(groupByOwners($files));