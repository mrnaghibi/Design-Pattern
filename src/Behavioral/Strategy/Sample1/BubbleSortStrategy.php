<?php


namespace Pattern\Behavioral\Strategy\Sample1;

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using bubble sort";
        // Do sorting
        return $dataset;
    }
}
