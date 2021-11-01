# Computer Science Algorithms in PHP

![](https://img.shields.io/github/stars/anilozmen/computer-science-algorithms-in-php.svg)
![](https://img.shields.io/github/forks/anilozmen/computer-science-algorithms-in-php.svg)
![](https://img.shields.io/github/issues/anilozmen/computer-science-algorithms-in-php.svg)


## [Bubble Sort Usage](src/Sort/BubbleSort.php)

```php 
<?php

use CS\Sort;
use CS\Sort\BubbleSort;

(new Sort)->sort([5, 7, 3, 2, 9, 0, 1, 6, 8, 4], new BubbleSort);
```

## [Insertion Sort Usage](src/Sort/InsertionSort.php)

```php 
<?php

use \CS\Sort;
use \CS\Sort\InsertionSort;

(new Sort)->sort([5, 7, 3, 2, 9, 0, 1, 6, 8, 4], new InsertionSort);
```

## [Merge Sort Usage](src/Sort/MergeSort.php)

```php 
<?php

use \CS\Sort;
use \CS\Sort\MergeSort;

(new Sort)->sort([5, 7, 3, 2, 9, 0, 1, 6, 8, 4], new MergeSort);
```

## [Quick Sort Usage](src/Sort/QuickSort.php)

```php 
<?php

use \CS\Sort;
use \CS\Sort\QuickSort;

(new Sort)->sort([5, 7, 3, 2, 9, 0, 1, 6, 8, 4], new QuickSort);
```

## [Radix Sort Usage](src/Sort/RadixSort.php)

```php 
<?php

use \CS\Sort;
use \CS\Sort\RadixSort;

(new Sort)->sort([5, 7, 3, 2, 9, 0, 1, 6, 8, 4], new RadixSort);
```

## [Linear Search Usage](src/Search/LinearSearch.php)

```php 
<?php

use \CS\Search;
use \CS\Search\LinearSearch;

$array = [
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

(new Search)->sort($array, new LinearSearch);
```

## [Binary Search Usage](src/Search/BinarySearch.php)

```php 
<?php

use \CS\Search;
use \CS\Search\BinarySearch;

$array = [
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

(new Search)->sort($array, new BinarySearch);
```
