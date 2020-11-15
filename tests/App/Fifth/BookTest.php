<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource SimpleTest.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.11
 *
 */

include __DIR__ . "/../../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Fifth\{Book, BookFactory};

class BookTest extends TestCase
{
    protected $book;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->book = BookFactory::create();
    }

    public function testAvailableBooks()
    {
        $this->assertCount(3, $this->book->availableBooks());

        $this->assertIsArray($this->book->availableBooks());

        $this->assertContains('Book A', $this->book->availableBooks());
        $this->assertContains('Book B', $this->book->availableBooks());
        $this->assertContains('Book C', $this->book->availableBooks());
    }

    public function testIsHaveBook()
    {
        $this->book->setTempBookName('Book A');
        $this->assertTrue($this->book->isHaveBook());
    }

    public function testBorrowBook()
    {
        $this->assertCount(3, $this->book->availableBooks());

        $this->book->setTempBookName('Book A');

        $this->book->borrowBook();

        $this->assertCount(2, $this->book->availableBooks());
    }
}