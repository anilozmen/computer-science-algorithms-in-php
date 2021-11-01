<?php

namespace CS\Search;

use CS\Interfaces\SearchInterface;

class BinarySearch implements SearchInterface
{
    public function search(int $id, array $input): bool|array
    {
        $min = 0;
        $max = count($input) - 1;

        while ($min <= $max) {
            $index = (int) ceil(($max + $min) / 2);
            $element = $input[$index];

            if ($element['id'] < $id) {
                $min = $index + 1;
            } elseif ($element['id'] > $id) {
                $max = $index - 1;
            } else {
                return $element;
            }
        }

        return false;
    }
}
