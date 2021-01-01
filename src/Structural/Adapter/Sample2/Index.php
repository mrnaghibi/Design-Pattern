<?php


namespace Pattern\Structural\Adapter\Sample2;

/**
 * EN: Adapter Design Pattern
 *
 * Intent: Provides a unified interface that allows objects with incompatible
 * interfaces to collaborate.
 *
 * Example: The Adapter pattern allows you to use 3rd-party or legacy classes
 * even if they are incompatible with the bulk of your code. For example,
 * instead of rewriting the notification interface of your app to support each
 * 3rd-party service such as Slack, Facebook, SMS or (you-name-it), you can
 * create a set of special wrappers that adapt calls from your app to an
 * interface and format required by each 3rd-party class.
 */
class Index
{
    public static function main()
    {
        echo "Client code is designed correctly and works with email notifications:\n";
        $notification = new EmailNotification("developers@example.com");
        clientCode($notification);
        echo "\n\n";


        echo "The same client code can work with other classes via adapter:\n";
        $slackApi = new SlackApi("example.com", "XXXXXXXX");
        $notification = new SlackNotification($slackApi, "Example.com Developers");
        clientCode(new SlackNotificationAdapter($notification));
    }
}

/**
 * EN: The client code can work with any class that follows the Target
 * interface.
 *
 * @param Notification $notification
 */
function clientCode(Notification $notification)
{
    echo $notification->send(
        "Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!"
    );
}