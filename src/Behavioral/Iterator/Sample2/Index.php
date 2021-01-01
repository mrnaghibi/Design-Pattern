<?php


namespace Pattern\Behavioral\Iterator\Sample2;

/**
 * EN: Iterator Design Pattern
 *
 * Intent: Provide a way to access the elements of an aggregate object without
 * exposing its underlying representation.
 *
 * Example: Since PHP already has a built-in Iterator interface, which provides
 * convenient integration with foreach loops, it is very easy to create your own
 * iterators for traversing almost every imaginable data structure.
 *
 * This example of the Iterator pattern provides easy access to CSV files.
 *
 */
class Index
{
    public static function main()
    {
        /**
         * EN: The client code.
         *
         */
        $csv = null;
        try {
            $csv = new CsvIterator(__DIR__ . DIRECTORY_SEPARATOR . 'cats.csv');
        } catch (\Exception $exception) {
        }

        foreach ($csv as $key => $row) {
            print_r($row);
        }
    }
}
