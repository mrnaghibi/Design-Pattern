<?php

namespace Pattern\Structural\Facade\Sample2;

/**
 * EN: The YouTube API subsystem.
 *
 */
class YouTube
{
    public function __construct(string $youtubeApiKey)
    {
    }

    public function fetchVideo(): string
    {
        /* ... */
    }

    public function saveAs(string $path): void
    {
        /* ... */
    }

    // EN: ...more methods and classes...
}
