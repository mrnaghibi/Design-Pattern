<?php


namespace Pattern\Behavioral\Strategy;

interface SortStrategy
{
    public function sort(array $dataset): array;
}
