<?php

namespace CS\Traits;

trait SortTrait
{
    /**
     * Loops the all data. If the value is numeric,
     * it converts to integer, otherwise ignores.
     *
     * @param array $data
     *
     * @return array
     */
    public function cleanTheArrayData(array $data): array
    {
        $array = [];
        foreach ($data as $key => $datum) {
            if (!is_numeric($datum)) {
                continue;
            }
            $array[$key] = (int) trim($datum);
        }

        return array_values($array);
    }
}
