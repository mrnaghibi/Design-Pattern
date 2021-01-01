<?php

namespace Pattern\Structural\Facade\Sample2;

/**
 * EN: Facade Design Pattern
 *
 * Intent: Provide a unified interface to a set of interfaces in a subsystem.
 * Facade defines a higher-level interface that makes the subsystem easier to
 * use.
 *
 * Example: Think of the Facade as a simplicity adapter for some complex
 * subsystem. The Facade isolates complexity within a single class and allows
 * other application code to use the straightforward interface.
 *
 * In this example, the Facade hides the complexity of the YouTube API and
 * FFmpeg library from the client code. Instead of working with dozens of
 * classes, the client uses a simple method on the Facade.
 */
class FFMpegVideo
{
    public function filters(): self
    {
 /* ... */
    }

    public function resize(): self
    {
 /* ... */
    }

    public function synchronize(): self
    {
 /* ... */
    }

    public function frame(): self
    {
 /* ... */
    }

    public function save(string $path): self
    {
 /* ... */
    }

    // ...more methods and classes... RU: ...дополнительные методы и классы...
}
