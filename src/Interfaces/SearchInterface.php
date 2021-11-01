<?php

namespace CS\Interfaces;

interface SearchInterface
{
    /**
     * Search the data by id.
     *
     * @param int   $id
     * @param array $input
     *
     * @return bool|array
     */
    public function search(int $id, array $input): bool|array;
}
