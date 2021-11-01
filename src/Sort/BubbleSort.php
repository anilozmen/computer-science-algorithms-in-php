<?php

namespace CS\Sort;

use CS\Interfaces\SortInterface;
use CS\Traits\SortTrait;

class BubbleSort implements SortInterface
{
    use SortTrait;

    /**
     * @inheritDoc
     */
    public function sort(array $input): array
    {
        // Clean the array.
        $input = $this->cleanTheArrayData($input);
        $swapped = false;

        do {
            $swapped = false;

            for ($i = 0; $i < count($input); $i++) {
                if (!isset($input[$i + 1])) {
                    continue;
                }

                if ($input[$i] > $input[$i + 1]) {
                    $temp = $input[$i];
                    $input[$i] = $input[$i + 1];
                    $input[$i + 1] = $temp;
                    $swapped = true;
                }
            }
        } while ($swapped);

        return $input;
    }
}
