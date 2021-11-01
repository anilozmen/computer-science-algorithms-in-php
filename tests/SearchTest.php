<?php

namespace Tests;

use CS\Search;
use CS\Search\BinarySearch;
use CS\Search\LinearSearch;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    protected array $data = [
        ['id' => 1, 'name' => 'Joe'],
        ['id' => 3, 'name' => 'Olivia'],
        ['id' => 5, 'name' => 'Emma'],
        ['id' => 6, 'name' => 'Oliver'],
        ['id' => 10, 'name' => 'Liam'],
        ['id' => 12, 'name' => 'John'],
        ['id' => 13, 'name' => 'James'],
        ['id' => 15, 'name' => 'Sophia'],
        ['id' => 17, 'name' => 'Benjamin'],
        ['id' => 18, 'name' => 'Ryan'],
        ['id' => 19, 'name' => 'Ivy'],
        ['id' => 21, 'name' => 'Alice'],
        ['id' => 23, 'name' => 'Max'],
        ['id' => 24, 'name' => 'Simon'],
    ];

    /**
     * @testdox Binary Search
     */
    public function testBinarySearch()
    {
        $actual = (new Search())->search(10, $this->data, (new BinarySearch()));
        $this->assertSame(['id' => 10, 'name' => 'Liam'], $actual);

        $false = (new Search())->search(100, $this->data, (new BinarySearch()));
        $this->assertFalse($false);
    }

    /**
     * @testdox Linear Search
     */
    public function testLinearSearch()
    {
        $actual = (new Search())->search(17, $this->data, (new LinearSearch()));
        $this->assertSame(['id' => 17, 'name' => 'Benjamin'], $actual);

        $false = (new Search())->search(2, $this->data, (new LinearSearch()));
        $this->assertFalse($false);
    }
}
