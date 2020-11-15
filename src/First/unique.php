<?php

/**
 * @param array $first
 * @param array $second
 *
 * @return array
 */
function uniqueNames(array $first = [], array $second = []) : array
{
   return array_unique(array_merge_recursive($first, $second));
}

$first = ['Ava', 'Emma', 'Olivia'];
$second = ['Olivia', 'Sophia', 'Emma'];

print_r(uniqueNames($first, $second));
