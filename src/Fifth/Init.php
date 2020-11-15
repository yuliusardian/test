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
 * @time 21.24
 *
 */

include __DIR__ . "/../../vendor/autoload.php";

use App\Fifth\BookFactory;

$book = BookFactory::create();

print_r($book->availableBooks());

echo 'Picked : Book A' . PHP_EOL;
$book->setTempBookName('Book A');

echo $book->isHaveBook() ? 'Buku Tersedia' : 'Buku tidak tersedia';
echo PHP_EOL;

echo $book->isLoaned() ? 'Sudah dipinjam' : 'Belum dipinjam' . PHP_EOL;

echo $book->borrowBook();

echo $book->getIndexBook();
echo PHP_EOL;

print_r($book->availableBooks());

echo 'Picked : Book B' . PHP_EOL;
$book->setTempBookName('Book B');

echo $book->isHaveBook() ? 'Buku Tersedia' : 'Buku tidak tersedia';
echo PHP_EOL;

echo $book->isLoaned() ? 'Sudah dipinjam' : 'Belum dipinjam' . PHP_EOL;

echo $book->borrowBook();

echo $book->getIndexBook();
echo PHP_EOL;

print_r($book->availableBooks());

echo $book->returnBook();

print_r($book->availableBooks());


echo 'Picked : Book X' . PHP_EOL;
$book->setTempBookName('Book X');

echo $book->isHaveBook() ? 'Buku Tersedia' : 'Buku tidak tersedia';
echo PHP_EOL;

echo $book->isLoaned() ? 'Sudah dipinjam' : 'Belum dipinjam' . PHP_EOL;

echo $book->borrowBook();