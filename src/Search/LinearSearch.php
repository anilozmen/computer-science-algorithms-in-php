<?php

namespace CS\Search;

use CS\Interfaces\SearchInterface;

class LinearSearch implements SearchInterface
{
    /**
     * @inheritDoc
     */
    public function search(int $id, array $input): bool|array
    {
        foreach ($input as $item) {
            if ($id === $item['id']) {
                return $item;
            }
        }

        return false;
    }
}
