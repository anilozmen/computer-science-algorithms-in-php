<?php

namespace CS\Sort;

use CS\Interfaces\SortInterface;
use CS\Traits\SortTrait;

class InsertionSort implements SortInterface
{
    use SortTrait;

    /**
     * @inheritDoc
     */
    public function sort(array $input): array
    {
        $input = $this->cleanTheArrayData($input);

        for ($i = 1; $i < count($input); $i++) {
            $temp = $input[$i];
            for ($j = $i; $j > 0; $j--) {
                if ($input[$j - 1] <= $temp) {
                    break;
                }
                $input[$j] = $input[$j - 1];
            }
            $input[$j] = $temp;
        }

        return $input;
    }
}
