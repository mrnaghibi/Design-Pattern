<?php

namespace Pattern\Behavioral\TemplateMethod\Sample2;

class Index
{
    public static function main()
    {
        /**
         * A little helper function that makes waiting times feel real.
         */
        function simulateNetworkLatency()
        {
            $i = 0;
            while ($i < 5) {
                echo ".";
                sleep(1);
                $i++;
            }
        }

        /**
         * The client code.
         */
        $username = "username";
        $password = "password";
        $message = "message";
        $choice = "1";

        // Now, let's create a proper social network object and send the message.
        if ($choice == 1) {
            $network = new Facebook($username, $password);
        } elseif ($choice == 2) {
            $network = new Twitter($username, $password);
        } else {
            die("Sorry, I'm not sure what you mean by that.\n");
        }
        $network->post($message);
    }
}
