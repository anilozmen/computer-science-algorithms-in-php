<?php

namespace CS\Sort;

use CS\Interfaces\SortInterface;
use CS\Traits\SortTrait;

class QuickSort implements SortInterface
{
    use SortTrait;

    /**
     * @inheritDoc
     */
    public function sort(array $input): array
    {
        $input = $this->cleanTheArrayData($input);

        if (count($input) <= 1) {
            return $input;
        }

        $pivot = end($input);
        $left = [];
        $right = [];

        for ($i = 0; $i < count($input) - 1; $i++) {
            if ($input[$i] < $pivot) {
                $left[] = $input[$i];
            } else {
                $right[] = $input[$i];
            }
        }

        $sortedLeft = $this->sort($left);
        $sortedRight = $this->sort($right);
        array_push($sortedLeft, $pivot);

        return array_merge($sortedLeft, $sortedRight);
    }
}
