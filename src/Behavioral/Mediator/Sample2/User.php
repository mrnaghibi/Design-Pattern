<?php

namespace Pattern\Behavioral\Mediator\Sample2;

/**
 * EN: Let's keep the User class trivial since it's not the focus of our
 * example.
 *
 */
class User
{
    public $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }

    /**
     * EN: All objects can trigger events.
     *
     */
    public function delete(): void
    {
        echo "User: I can now delete myself without worrying about the repository.\n";
        events()->trigger("users:deleted", $this, $this);
    }
}