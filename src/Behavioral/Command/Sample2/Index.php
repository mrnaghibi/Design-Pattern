<?php


namespace Pattern\Behavioral\Command\Sample2;

/**
 * EN: Command Design Pattern
 *
 * Intent: Turns a request into a stand-alone object that contains all
 * information about the request. This transformation lets you parameterize
 * methods with different requests, delay or queue a request's execution, and
 * support undoable operations.
 *
 * Example: In this example, the Command pattern is used to queue web scraping
 * calls to the IMDB website and execute them one by one. The queue itself is
 * kept in a database which helps to preserve commands between script launches.
 *
 */
class Index
{
    public static function main()
    {
        /**
         * EN: The client code.
         */

        $queue = Queue::get();

        if ($queue->isEmpty()) {
            $queue->add(new IMDBGenresScrapingCommand());
        }
        $queue->work();
    }
}
