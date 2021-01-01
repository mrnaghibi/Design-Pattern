<?php


namespace Pattern\Behavioral\Strategy\Sample1;

interface SortStrategy
{
    public function sort(array $dataset): array;
}
