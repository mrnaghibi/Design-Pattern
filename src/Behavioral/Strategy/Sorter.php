<?php


namespace Pattern\Behavioral\Strategy;

/**
 * Class Sorter
 *
 * @property SortStrategy
 * @package Pattern\Behavioral\Strategy
 */
class Sorter
{
    protected SortStrategy $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset): array
    {
        return $this->sorter->sort($dataset);
    }
}
