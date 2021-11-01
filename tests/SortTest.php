<?php

namespace Tests;

use CS\Sort;
use CS\Sort\BubbleSort;
use CS\Sort\InsertionSort;
use CS\Sort\MergeSort;
use CS\Sort\QuickSort;
use CS\Sort\RadixSort;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class SortTest extends TestCase
{
    protected array $expected = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    protected array $arrayOfInteger = [5, 7, 3, 2, 9, 0, 1, 6, 8, 4];
    protected array $arrayOfString = [];

    protected function setUp(): void
    {
        $this->arrayOfString = array_map('strval', $this->arrayOfInteger);
    }

    /**
     * @testdox Bubble Sort
     */
    public function testBubbleSort()
    {
        $actual = (new Sort())->sort($this->arrayOfInteger, new BubbleSort());
        $this->assertSame($this->expected, $actual);

        $actual = (new Sort())->sort($this->arrayOfString, new BubbleSort());
        $this->assertSame($this->expected, $actual);
    }

    /**
     * @testdox Insertion Sort
     */
    public function testInsertionSort()
    {
        $actual = (new Sort())->sort($this->arrayOfInteger, new InsertionSort());
        $this->assertSame($this->expected, $actual);

        $actual = (new Sort())->sort($this->arrayOfString, new InsertionSort());
        $this->assertSame($this->expected, $actual);
    }

    /**
     * @testdox Merge Sort
     */
    public function testMergeSort()
    {
        $actual = (new Sort())->sort($this->arrayOfInteger, new MergeSort());
        $this->assertSame($this->expected, $actual);

        $actual = (new Sort())->sort($this->arrayOfString, new MergeSort());
        $this->assertSame($this->expected, $actual);
    }

    /**
     * @testdox Merge Sort - merge() method test
     */
    public function testMergeSortMergeMethod()
    {
        $actual = self::callMethod((new MergeSort()), 'merge', [[10], [5]]);

        $this->assertSame([5, 10], $actual);
    }

    /**
     * @testdox Quick Sort
     */
    public function testQuickSort()
    {
        $actual = (new Sort())->sort($this->arrayOfInteger, new QuickSort());
        $this->assertSame($this->expected, $actual);

        $actual = (new Sort())->sort($this->arrayOfString, new QuickSort());
        $this->assertSame($this->expected, $actual);
    }

    /**
     * @testdox Radix Sort
     */
    public function testRadixSort()
    {
        $actualData = [20, 51, 3, 801, 415, 62, 4, 17, 19, 11, 1, 100, 1244, 104, 944, 854, 34, 3000, 3001, 1200, 633];
        $expected = [1, 3, 4, 11, 17, 19, 20, 34, 51, 62, 100, 104, 415, 633, 801, 854, 944, 1200, 1244, 3000, 3001];

        $actual = (new Sort())->sort($actualData, new RadixSort());
        $this->assertSame($expected, $actual);
    }

    /**
     * @testdox Radix Sort - getMaximumNumberOfDigit() method test
     */
    public function testRadixSortGetMaximumNumberOfDigitMethod()
    {
        $obj = new RadixSort();
        $this->assertSame(0, self::callMethod($obj, 'getMaximumNumberOfDigit', [5, 3, 10]));
        $this->assertSame(2, self::callMethod($obj, 'getMaximumNumberOfDigit', [20, 2, 4]));
    }

    public static function callMethod(object $object, string $methodName, array $args = [])
    {
        $reflection = new ReflectionClass($object);
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $args);
    }
}
