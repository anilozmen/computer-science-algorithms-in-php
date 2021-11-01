<?php

namespace CS\Sort;

use CS\Interfaces\SortInterface;
use CS\Traits\SortTrait;

class MergeSort implements SortInterface
{
    use SortTrait;

    /**
     * @inheritDoc
     */
    public function sort(array $input): array
    {
        $input = $this->cleanTheArrayData($input);

        // Return if length 1 or 0.
        if (count($input) < 2) {
            return $input;
        }

        // Break into two smaller arrays
        $middle = (int)ceil(count($input) / 2);
        $leftArray = array_slice($input, 0, $middle);
        $rightArray = array_slice($input, $middle);

        // Call merge func. on left and right.
        $sortedLeft = $this->sort($leftArray);
        $sortedRight = $this->sort($rightArray);

        return $this->merge($sortedLeft, $sortedRight);
    }

    /**
     * @param  array $leftArray
     * @param  array $rightArray
     * @return array
     */
    protected function merge(array $leftArray, array $rightArray): array
    {
        $results = [];

        while (count($leftArray) > 0 && count($rightArray)) {
            $results[] = $leftArray[0] <= $rightArray[0]
                ? array_shift($leftArray)
                : array_shift($rightArray);
        }

        return array_merge($results, $leftArray, $rightArray);
    }
}
