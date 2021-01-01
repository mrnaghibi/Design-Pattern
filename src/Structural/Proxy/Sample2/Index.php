<?php


namespace Pattern\Structural\Proxy\Sample2;

/**
 * EN: Proxy Design Pattern
 *
 * Intent: Provide a surrogate or placeholder for another object to control
 * access to the original object or to add other responsibilities.
 *
 * Example: There are countless ways proxies can be used: caching, logging,
 * access control, delayed initialization, etc. This example demonstrates how
 * the Proxy pattern can improve the performance of a downloader object by
 * caching its results.
 */

/**
 * EN: The client code may issue several similar download requests. In this
 * case, the caching proxy saves time and traffic by serving results from cache.
 *
 * The client is unaware that it works with a proxy because it works with
 * downloaders via the abstract interface.
 *
 * @param Downloader $subject
 */
function clientCode(Downloader $subject)
{
    // ...

    $result = $subject->download("http://example.com/");

    // EN: Duplicate download requests could be cached for a speed gain.

    $result = $subject->download("http://example.com/");
    // ...
}


class Index
{
    public static function main()
    {
        echo "Executing client code with real subject:\n";
        $realSubject = new SimpleDownloader();
        clientCode($realSubject);

        echo "\n";

        echo "Executing the same client code with a proxy:\n";
        $proxy = new CachingDownloader($realSubject);
        clientCode($proxy);
    }
}
