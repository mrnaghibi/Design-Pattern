<?php

namespace Pattern\Behavioral\ChainOfResponsibility\Sample2;

/**
 * EN: This is an application's class that acts as a real handler. The Server
 * class uses the CoR pattern to execute a set of various authentication
 * middleware before launching some business logic associated with a request.
 */
class Server
{
    private $users = [];

    /**
     * @var Middleware
     */
    private Middleware $middleware;

    /**
     * EN: The client can configure the server with a chain of middleware
     * objects.
     *
     * @param Middleware $middleware
     */
    public function setMiddleware(Middleware $middleware): void
    {
        $this->middleware = $middleware;
    }

    /**
     * EN: The server gets the email and password from the client and sends the
     * authorization request to the middleware.
     *
     * @param string $email
     * @param string $password
     *
     * @return bool
     */
    public function logIn(string $email, string $password): bool
    {
        if ($this->middleware->check($email, $password)) {
            echo "Server: Authorization has been successful!\n";

            // EN: Do something useful for authorized users.

            return true;
        }

        return false;
    }

    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }

    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }

    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] === $password;
    }
}