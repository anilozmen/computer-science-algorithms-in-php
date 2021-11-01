<?php

namespace CS;

use CS\Interfaces\SearchInterface;

class Search
{
    /**
     * @param string          $id
     * @param array           $input
     * @param SearchInterface $search
     *
     * @return bool|array
     */
    public function search(string $id, array $input, SearchInterface $search): bool|array
    {
        return $search->search($id, $input);
    }
}
