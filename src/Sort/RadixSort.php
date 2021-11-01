<?php

namespace CS\Sort;

use CS\Interfaces\SortInterface;
use CS\Traits\SortTrait;

class RadixSort implements SortInterface
{
    use SortTrait;

    /**
     * @inheritDoc
     */
    public function sort(array $input): array
    {
        // Clean the array.
        $input = $this->cleanTheArrayData($input);

        // Find the Longest Digit based on the values of the array.
        $longest = max(array_map('strlen', $input));

        // Make an array of 10 empty arrays.
        $buckets = array_fill(0, 10, array());

        for ($i = $longest - 1; $i >= 0; $i--) {
            while (isset($input) && $input) {
                $current = array_shift($input);
                $digit = $this->getMaximumNumberOfDigit($current, $i, $longest);
                $buckets[$digit][] = $current;
            }

            for ($j = 0; $j < 10; $j++) {
                while (isset($buckets[$j]) && $buckets[$j]) {
                    $input[] = array_shift($buckets[$j]);
                }
            }
        }

        return $input;
    }

    protected function getMaximumNumberOfDigit(int $number, int $place, int $longestNumber): int
    {
        $numberToArray = str_split((string)$number);
        $mod = $longestNumber - count($numberToArray);
        return (int)($numberToArray[$place - $mod] ?? '0');
    }
}
