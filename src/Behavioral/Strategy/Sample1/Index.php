<?php


namespace Pattern\Behavioral\Strategy\Sample1;

class Index
{
    public static function main()
    {
        $dataset = [1, 5, 4, 3, 2, 8];
        $sorter = new Sorter(new BubbleSortStrategy());
        $sorter->sort($dataset); // Output: Sorting using bubble sort
        $sorter = new Sorter(new QuickSortStrategy());
        $sorter->sort($dataset); // Output: Sorting using quick sort
    }
}
