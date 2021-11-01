<?php

namespace CS;

use CS\Interfaces\SortInterface;

class Sort
{
    /**
     * @param array         $input
     * @param SortInterface $sort
     *
     * @return array
     */
    public function sort(array $input, SortInterface $sort): array
    {
        return $sort->sort($input);
    }
}
