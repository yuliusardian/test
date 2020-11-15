<?php
/**
 * test
 * PT. Ako Media Asia (https://salt.id/)
 * Copyright 2020
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource Book.php
 * @copyright Copyright 2020, PT. Ako Media Asia
 * @author yuliusardian
 * @since 15/11/20
 * @time 21.25
 *
 */

namespace App\Fifth;

use App\Fifth\Exceptions\{
    BookIsNotOnLoanException,
    BookAlreadyLoanException,
    DontHaveBookException
};

class Book
{
    private array $books;

    private array $booksLoanedList;

    private string $tempBookName;

    private static $instance = null;

    private function __construct()
    {
        $this->books = ['Book A', 'Book B', 'Book C'];
        $this->booksLoanedList = [];
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Book();
        }

        return self::$instance;
    }

    public function availableBooks(): array
    {
        return array_diff($this->books, $this->booksLoanedList);
    }

    public function setTempBookName($bookName)
    {
        $this->tempBookName = $bookName;
    }

    public function returnBook(): void
    {
        if ($this->isHaveBook()) {
            if ($this->isLoaned()) {
                unset($this->booksLoanedList[$this->getIndexBook()]);
                echo "Success return book " . $this->tempBookName . PHP_EOL;
            } else {
                throw new BookIsNotOnLoanException($this->tempBookName);
            }
        }
    }

    public function getIndexBook()
    {
        return array_search($this->tempBookName, $this->booksLoanedList);
    }

    public function borrowBook()
    {
        if ($this->isHaveBook()) {
            if (!$this->isLoaned()) {
                array_push($this->booksLoanedList, $this->tempBookName);
                echo "Success borrow book " . $this->tempBookName . PHP_EOL;
            } else {
                throw new BookAlreadyLoanException($this->tempBookName);
            }
        }
    }

    public function isLoaned(): bool
    {
        return (in_array($this->tempBookName, $this->booksLoanedList));
    }

    public function isHaveBook()
    {
        if (in_array($this->tempBookName, $this->books)) {
            return true;
        }

        throw new DontHaveBookException($this->tempBookName);
    }
}