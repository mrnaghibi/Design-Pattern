<?php


namespace Pattern\Behavioral\ChainOfResponsibility\Sample2;

/**
 * EN: Chain of Responsibility Design Pattern
 *
 * Intent: Lets you pass requests along a chain of handlers. Upon receiving a
 * request, each handler decides either to process the request or to pass it to
 * the next handler in the chain.
 *
 * Example: The most widely known use of the Chain of Responsibility (CoR)
 * pattern in the PHP world is found in HTTP request middleware. These are
 * implemented by most popular PHP frameworks and even got standardized as part
 * of PSR-15.
 *
 * It works like this: an HTTP request must pass through a stack of middleware
 * objects in order to be handled by the app. Each middleware can either reject
 * the further processing of the request or pass it to the next middleware. Once
 * the request successfully passes all middleware, the primary handler of the
 * app can finally handle it.
 *
 * You might have noticed that this approach is kind of inverse to the original
 * intent of the pattern. Indeed, in the typical implementation, a request is
 * only passed along a chain if a current handler CANNOT process it, while a
 * middleware passes the request further down the chain when it thinks that the
 * app CAN handle the request. Nevertheless, since middleware are chained, the
 * whole concept is still considered an example of the CoR pattern.
 */
class Index
{
    public static function main()
    {
        /**
         * EN: The client code.
         */
        $server = new Server();
        $server->register("admin@example.com", "admin_pass");
        $server->register("user@example.com", "user_pass");

        // EN: All middleware are chained. The client can build various configurations
        // of chains depending on its needs.
        $middleware = new ThrottlingMiddleware(2);
        $middleware
            ->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware());

        // EN: The server gets a chain from the client code.
        $server->setMiddleware($middleware);

        do {
            echo "\nEnter your email:\n";
            $email = "admin@example.com";
            echo "Enter your password:\n";
            $password = "admin_pass";
            $success = $server->logIn($email, $password);
        } while (!$success);
    }
}
