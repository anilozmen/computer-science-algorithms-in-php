<?php

namespace CS\Interfaces;

interface SortInterface
{
    /**
     * Sorts the input data.
     *
     * @param array $input
     *
     * @return array
     */
    public function sort(array $input): array;
}
